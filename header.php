<?php require_once('backend/config.php');?>
<header>
    <div class="container">
        <div class="menu">
            <a href="<?php echo $base_url;?>/index.php"><img src="<?php echo $base_url; ?>/img/logo.png" alt="CodeCamp logo"></a>
            <div class="splitPicture">
                <div class="dropdown">
                    <button class="dropbtn">Songteksten</button>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/Pages/Lyrics/bohemianRhapsody.php">bohemian Rhapsody</a>
                        <a href="#">Songtekst 2</a>
                        <a href="#">Songtekst 3</a>
                    </div>
                </div>
                <a id="header-link" href="">Lyrics</a>
                <a id="header-link" href="">Films</a>
                <a id="header-link" href="">Informatie</a>
                <a id="header-link" href="">Dranken</a>
                <a id="header-link" href="">Acteurs</a>
            </div>
        </div>
    </div>
</header>