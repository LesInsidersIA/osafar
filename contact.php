<?php
include('config/app.php');
include('codes/authentication_code.php');
include('includes/header.php');
include('includes/navbar.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<title>Contact us</title>
	<link rel="stylesheet" href="public/css/contact.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	
</head>
<body>
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h1>Contactez nous</h1>
				<input type="text" class="field" placeholder="Votre nom">
				<input type="text" class="field" placeholder="Votre prénom">
				<input type="email" class="field" placeholder="Votre email">
				<textarea placeholder="Votre message" class="field"></textarea>
				<button class="btn">Envoyer</button>
			</div>
		</div>
	</div>
    <script src="public/js/master.js"></script>
</body>
</html>