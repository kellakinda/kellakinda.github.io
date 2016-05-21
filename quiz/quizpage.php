<?php
    session_start();
    include("db_inc.php");
    include("quiz_db.php");
//    include("quiz_json.php");
?>

<div id="name" class="header">Frage</div>

<div id="antworten">
    <div class="antworten_row">
        <div class="answer" id="1">Antwort1</div>
        <div class="answer" id="2">Antwort2</div>
    </div>
    <div class="antworten_row">
        <div class="answer" id="3">Antwort3</div>
        <div class="answer" id="4">Antwort4</div>
    </div>
</div>
<input type="button" value="Nächste Frage" id="btn_send"/>
<!--<img src="thinking.png"/>-->

<script>
    var count = 0;
    var questions = <?php echo json_encode($questions); ?>;
    var answers = new Array();
    var length = questions.length;
    $('#name').html(questions[count][1]);
    $('#1').html(questions[count][2]);
    $('#2').html(questions[count][3]);
    $('#3').html(questions[count][4]);
    $('#4').html(questions[count][5]);
    $("#btn_send").attr("disabled", "disabled");
    
    $("#btn_send").click(function() {
        sel_answer = $(".answerselected").attr("id");
        if(sel_answer != questions[count][6])
        {
            answers[count] = false;
            $(".answerselected").addClass("wrong");
        }
        else
            answers[count] = true;
        
        $("#"+questions[count][6]).addClass("right");
        
        setTimeout(function(){
            $("#" + (questions[count][6])).removeClass("right");
            count++;
            if(count<length)
            {
                $('#name').html(questions[count][1]);
                $('#1').html(questions[count][2]);
                $('#2').html(questions[count][3]);
                $('#3').html(questions[count][4]);
                $('#4').html(questions[count][5]);
                
                if(count==length-1)
                    $("#btn_send").val("Quiz beenden");

                $("#btn_send").attr("disabled", "disabled");
                
                $(".answerselected").removeClass("wrong");
                
                $(".answer").removeClass("answerselected");
            }
            else
            {
                $.get('finalpage.php', function(data) {
                    $('body').html(data);
                })
            }
        }, 1500);
    });
    
    $(".answer").click(function() {
        $(".answer").removeClass("answerselected");
        $(this).addClass("answerselected");
        $("#btn_send").removeAttr('disabled');         
    })
</script>