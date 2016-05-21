<html>
    <head>
        <meta charset="utf-8"/>
        <title>UH16 Kellakinda Quiz</title>  
        <link href='roboto.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script type="text/javascript" src="jquery-2.1.1.min.js"> </script>  
    </head>
    <body>
        <div class="header">Herzlich Willkommen zum #kellakinda IoT Quiz - Viel Spaß!</div>
        <input type="button" id="btn_start" value="Quiz starten"></input>
        <img src="thinking.png"/>
    </body>
</html>

<script>
    $('#btn_start').click(function(){
        $.get('quizpage.php', function(data) {
            $('body').html(data);
        })
    });
</script>