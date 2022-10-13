<?php
include('config/app.php');
include('codes/authentication_code.php');
$auth->isLoggedIn();

include('includes/header.php');
include('includes/navbar.php');
?>
<?php
echo'<link href="public/css/login.css" rel="stylesheet" type="text/css">';
?>
<script src="public/js/master.js" defer></script>
<div class="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Créer un compte</h4>
                    </div>
                    
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="">Nom</label>
                            <input type="text" name="fname" class="form-control"
                            placeholder="Entrez votre nom"/>
                        </div>

                        <div class="mb-3">
                            <label for="">Prénom</label>
                            <input type="text" name="lname" class="form-control"
                            placeholder="Entrez votre prénomo"/>
                        </div>

                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control"
                            placeholder="Entrez votre émail"/>
                        </div>

                        <div class="mb-3">
                            <label for="">Mot de passe</label>
                            <input type="password" name="password" class="form-control"
                            placeholder="Entrez votre mot de passe"/>
                        </div>

                        <div class="mb-3">
                            <label for="">Confirmez le mot de passe</label>
                            <input type="password" name="confirm_password" class="form-control"
                            placeholder="Confirmez votre mot de passe"/>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="register_btn" class="btn">Créer le compte</button>
                        </div>

                    </form>
                        
                    </div>
            </div>

        </div>
    </div>

</div>





