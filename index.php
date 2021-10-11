<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="shortcut icon" href="img/logo.ico">
        <title>Homepagina</title>
</head>
<body>
        <?php include "header.php"?>

        <div class="container contBody">
                <p id="date"></p>
        </div>

        <?php include "footer.php"?>

        <script>
                var n =  new Date();
                var y = n.getFullYear();
                var m = n.getMonth() + 1;
                var d = n.getDate();
                var h = n.getHours();
                var min = n.getMinutes();
                var sec = n.getSeconds();
                document.getElementById("date").innerHTML = m + "/" + d + "/" + y + " " + h + ":" + min + ":" + sec;
        </script>
</body>
</html>
