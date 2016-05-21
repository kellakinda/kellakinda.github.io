<div class="header">Danke für Ihre Teilnahme! :) </div>
<div id="result">Quiz beendet</div>
<input type="button" id="backtomain" value="Zurück zur Homepage"/>
<img src="today.png"/>

<script>
    var rightcount = 0;
    var wrongcount = 0;
    answers.forEach(function(curElem){
        if(curElem)
            rightcount++;
        else
            wrongcount++;
    });
    
    data = {corranswers: rightcount, falseanswers: wrongcount};
        $.ajax({
            url: 'result_db.php',
//            url: 'result_json.php',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(response){ 
                console.log("Result eingetragen")
                
            },
            error: function(response){
                console.error("Result eintragen failed")
                console.log(response.responseText);
            }
        });
    
    $("#result").html("Sie haben " + rightcount + " von " + (wrongcount+rightcount) + " Antworten richtig beantwortet.");
    $("#backtomain").on("click", function() {
        window.location("../index.html");
    });
</script>