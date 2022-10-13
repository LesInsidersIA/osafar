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
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="public/css/offre.css">
</head>
<body>
        <div id="content-wrapper">
            
            <div class="column">
                <img id=featured src="public/imgs/offre/morocohotel.jpeg">

                <div id="slide-wrapper" >
                    <img id="slideLeft" class="arrow" src="public/imgs/offre/suite.jpeg">

                    <div id="slider">
                        <img class="thumbnail active" src="public/imgs/offre/suite.jpeg">
                        <img class="thumbnail" src="public/imgs/offre/chdouble.jpeg">
                        <img class="thumbnail" src="public/imgs/offre/chambre.jpeg">
                        <img class="thumbnail" src="public/imgs/offre/salledebain.jpeg">
                        <img class="thumbnail" src="public/imgs/offre/maroco.jpeg">
        
                    </div>

                    <img id="slideRight" class="arrow" src="public/imgs/offre/maroco.jpeg">
                </div>
            </div>
			<div class="column">
				<h1>Hôtel Framissima Marrakech 4*</h1>
				<h2>A partir de 89.99€</h2>
				<p>Doté d'une salle de sport, d'un bar, d'un jardin et d'une connexion Wi-Fi gratuite, le Sol Oasis Marrakech vous accueille à Marrakech, à 11 km du musée Yves-Saint-Laurent et à 12 km du jardin Majorelle. L’établissement possède une réception ouverte 24h/24, un restaurant, une pataugeoire et une piscine extérieure ouverte toute l’année. Vous pourrez profiter d’animations en soirée, d’un club pour enfants et d’un service de navette gratuit vers le centre-ville.

                Toutes les chambres comprennent la climatisation, une télévision par satellite à écran plat, une bouilloire, une douche, un sèche-cheveux et une armoire. La salle de bains privative est pourvue d’articles de toilette gratuits.

                Le Sol Oasis Marrakech sert un petit-déjeuner buffet.

                Vous bénéficierez par ailleurs d’une terrasse.</p>
                <input value=1 type="number" min="1" max="5">
			    <a class="btn" href="#">Vérifier la disponibilité </a>
				
			</div>
        </div>

    <script src="public/js/master.js"></script>
</body>
</html>

