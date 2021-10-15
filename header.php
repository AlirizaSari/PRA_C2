<?php require_once('backend/config.php');?>
<header>
    <div class="container">
        <div class="menu">
            <a href="<?php echo $base_url;?>/index.php"><img src="<?php echo $base_url; ?>/img/logo.png" alt="CodeCamp logo"></a>
            <div class="splitPicture">
                <div class="dropdown">
                    <button class="dropbtn">lyrics</button>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/Pages/Lyrics/bohemianRhapsody.php">Bohemian Rhapsody</a>
                        <a href="<?php echo $base_url; ?>/Pages/Lyrics/KillerQueen.php">Killer Queen</a>
                        <a href="<?php echo $base_url;?>/Pages/Lyrics/madness.php">Madness</a>
                        <a href="<?php echo $base_url;?>/Pages/Lyrics/uprisingMyBaby.php">Uprising MyBaby</a>
                        <a href="<?php echo $base_url;?>/Pages/Lyrics/uprisingMuse.php">Uprising Muse</a>
                        <a href="<?php echo $base_url;?>/Pages/Lyrics/pluginBaby.php">Plug in Baby</a>
                        <a href="<?php echo $base_url;?>/Pages/Lyrics/Transylvania.php">Transylvania</a>
                        <a href="<?php echo $base_url;?>/Pages/Lyrics/Champions.php">We are the Champions</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Films</button>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url;?>/Pages/Films/rogerMoore.php">James Bond</a>
                        <a href="<?php echo $base_url;?>/Pages/Films/films.php">Filmpersonages</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Informatie</button>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url;?>/Pages/Informatie/boeken.php">Boeken</a>
                        <a href="<?php echo $base_url;?>/Pages/Informatie/gereedschap.php">Gereedschappen</a>

                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Dranken</button>
                    <div class="dropdown-content">
                        <a href="#">Drank 1</a>
                        <a href="#">Drank 2</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Acteurs/Personages</button>
                    <div class="dropdown-content">
                        <a href="#">Acteur 1</a>
                        <a href="#">Acteur 2</a>
                        <a href="#">Acteur 3</a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</header>