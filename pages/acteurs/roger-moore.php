<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="shortcut icon" href="../../img/logo.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Mono">
        <script src="https://kit.fontawesome.com/1793fc5f13.js" crossorigin="anonymous"></script>
        <title>Homepagina</title>
    </head>
    <body>
        <?php include "../../header.php" ?>

        <div class="content padding">
            <div class="container rogerMoore flex">
                <div class="left">
                    <h2>Roger Moore</h2>
                    <p><br></p>
                    <p>James Bond films met Roger Moore:</p>
                    <p><br></p>
                    <ul>
                        <li>Live and Let Die</li>
                        <li>The Man with the Golden Gun</li>
                        <li>The Spy Who Loved Me</li>
                        <li>Moonraker</li>
                        <li>For your eyes only</li>
                        <li>Octopussy</li>
                        <li>A View to Kill</li>

                    </ul>
                </div>
                <div class="right">
                    <img src="<?php echo $base_url; ?>/img/RogerMoore.jpg" alt="Roger Moore afbeelding" title="Roger Moore als James Bond">
                </div>
                
            </div>
        </div>


        <?php include "../../footer.php" ?>
    </body>
</html>
