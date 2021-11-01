<?php require_once('backend/config.php'); ?>
<header>
    <div class="container">
        <div class="menu">
            <a href="<?php echo $base_url; ?>/index.php"><img src="<?php echo $base_url; ?>/img/logo.png" alt="CodeCamp logo"></a>
            <div class="splitPicture">
                <div class="dropdown">
                    <div class="breedteHeader">
                        <a class="home-link" href="<?php echo $base_url; ?>">Home</a>
                    </div>
                </div>
                
                <div class="dropdown">
                    <div class="breedteHeader">
                        <button class="dropbtn">Lyrics</button>
                    </div>
                    
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/pages/lyrics/bohemian-rhapsody.php">Bohemian Rhapsody - Queen</a>
                        <a href="<?php echo $base_url; ?>/pages/lyrics/killer-queen.php">Killer Queen - Queen</a>
                        <a href="<?php echo $base_url; ?>/pages/lyrics/champions.php">We are the Champions - Queen</a>
                        <a href="<?php echo $base_url; ?>/pages/lyrics/madness.php">Madness - Muse</a>
                        <a href="<?php echo $base_url; ?>/pages/lyrics/uprising-muse.php">Uprising - Muse</a>
                        <a href="<?php echo $base_url; ?>/pages/lyrics/plugin-baby.php">Plug in Baby - Muse</a>
                        <a href="<?php echo $base_url; ?>/pages/lyrics/uprising-mybaby.php">Uprising - MyBaby</a>
                    </div>
                </div>
                <div class="dropdown">
                    <div class="breedteHeader">
                        <button class="dropbtn">Filmwereld</button>
                    </div>
                    
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/pages/filmwereld/acteurs.php">Acteurs</a>
                        <a href="<?php echo $base_url; ?>/pages/filmwereld/filmpersonages.php">Filmpersonages</a>

                    </div>
                </div>
                <div class="dropdown">
                    <div class="breedteHeader">
                        <button class="dropbtn">Informatie</button>
                    </div>
                    
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/pages/informatie/boeken.php">Boeken</a>
                        <a href="<?php echo $base_url; ?>/pages/informatie/gereedschap.php">Gereedschappen</a>

                    </div>
                </div>
                <div class="dropdown">
                    <div class="breedteHeader">
                        <button class="dropbtn">Dranken</button>
                    </div>
                    
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url; ?>/pages/dranken/frisdrank.php">Frisdranken</a>
                        <a href="<?php echo $base_url; ?>/pages/dranken/warme_dranken.php">Warme dranken</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
