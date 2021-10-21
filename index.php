<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="shortcut icon" href="img/logo.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Mono">
        <script src="https://kit.fontawesome.com/1793fc5f13.js" crossorigin="anonymous"></script>
        <title>Homepagina</title>
</head>
<body onload="display_c()";>
        <?php include "header.php"?>

        <div class="container contBody pushUp">
                <div class="hero-image">
                        <h2 id="time"></h2>
                        <br>
                        <h4 id="date"></h4>   
                </div>

                <div class="center">
                        <div class="card">
                                <div class="flex">

                                        
                                        <div class="left">
                                                <h2>Over ons:</h2>
                                                <p><strong>CodeCamp</p>
                                                <p>Koestraat 1</p>
                                                <p>5523 AG Den Bosch</p>
                                                <p>06-123555-456 </strong></p>
                                        </div>
                                        <div class="right">
                                                <img src="<?php echo $base_url; ?>/img/logo.png" alt="logo">
                                        </div>
                                </div>                
                        </div>                
                </div>
                
                
                
        </div>


        <?php include "footer.php"?>

        <script>
                function display_c() {
                        var refresh=1000; // Refresh rate in milli seconds
                        mytime=setTimeout('display_time()',refresh)
                        mytime=setTimeout('display_date()',refresh)
                }

                function display_time() {
                        var x = new Date()
                        var x1 = ((x.getHours() < 10)?"0":"") + x.getHours() +":"+ ((x.getMinutes() < 10)?"0":"") + x.getMinutes() +":"+ ((x.getSeconds() < 10)?"0":"") + x.getSeconds(); 
                        document.getElementById('time').innerHTML = x1;
                        display_c();
                }

                function display_date() {
                        var x = new Date()
                        var x1 = ((x.getDate() < 10)?"0":"") + x.getDate() +"-"+(((x.getMonth()+1) < 10)?"0":"") + (x.getMonth()+1) +"-"+ x.getFullYear();
                        document.getElementById('date').innerHTML = x1;
                        display_c();
}
        </script>
</body>
</html>
