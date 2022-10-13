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
        
            <div class="col-md-6">
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Se connecter</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
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
                            <button type="submit" name="login_btn" class="btn">Se connecter</button>
                        </div>

                    </form>
                        
                    </div>
            </div>

    </div>

</div>





