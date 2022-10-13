

<link href="public/css/nav.css" rel="stylesheet" type="text/css">

<script src="../public/js/master.js" defer></script>
<div class="header-area">

        <div class="logo">O'safar</div>

        <div class="links-container">
            <ul class="links">
                <li><a href="<?php base_url('index.php') ?>" class="active">Accueil</a></li>
                <li><a href="<?php base_url('offre.php') ?>">Offres</a></li>
                <li><a href="<?php base_url('package.php') ?>" >Packages</a></li>
                <li><a href="<?php base_url('contact.php') ?>" >Contact</a></li>
                
                <?php if(isset($_SESSION['authenticated'])) : ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                    <?= $_SESSION['auth_user']['user_fname'].""
                    .$_SESSION['auth_user']['user_lname']; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php base_url('my-profile.php') ?>" >Mon profile</a></li>
                        
                        <li>
                            <form action="" method="POST">
                                <button type="submit" name="logout_btn" class="dropdown-item">Se déconnecter</button>
                            </form>
                        </li>
                    </ul>
                </li>

                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url('login.php') ?>" >Se connecter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url('register.php') 
                    ?>">Créer un compte</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <button class="toggle-menu">
            <span></span>
            <span></span>
            <span></span>
        </button> 

</div>