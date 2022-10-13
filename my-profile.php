<?php
include('config/app.php');
include_once('controllers/AuthenticationController.php');

$authenticated = new AuthenticationController;
$data = $authenticated->authDetail();

include('includes/header.php');
include('includes/navbar.php');
?>
<!-- CSS only -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="public/css/my-profile.css">
<script src="public/js/master.js" defer></script>

<div class="py-5">
    <h1 class="text-center">Mon Profile</h1>
    <div class="information block">
        <div class="container">
            <?php include('message.php'); ?>
            <div class="panel panel-primary">
                <div class="panel-heading">Mes informations</div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li><span>Nom:</span> <?= $data['fname'].''. $data['lname']; ?></li>
                        <li><span>Email:</span> <?= $data['email']; ?></li>
                        <li><span>Créer le:</span> <?= date('d-m-Y', strtotime($data['create_at'])); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="my-ads block">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Mes vols</div>
            <ul class="list-unstyled">
            </ul>
        </div>
    </div>
</div>
<div class="my-ads block">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Mes documents</div>
            <ul class="list-unstyled">
            </ul>
        </div>
    </div>
</div>

