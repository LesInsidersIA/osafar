<?php
include('config/app.php');
include('codes/authentication_code.php');
include('includes/header.php');


?>

<body>
    
    <!-- start landing page -->
    <div class="landing-page" id="Accueil">
        <div class="overlay"></div>

        <?php
        include('includes/navbar.php');
        ?>
        <div class="introduction-text">
            <p>O’safar vous propose les meilleurs tarifs sur les vols et les hôtels, week-ends et séjours sur mesure. Comparez les prix et réservez votre voyage pas cher dès maintenant.</p>
            <h1>Comparez et Voyager</h1>
            <a href="#search" class="btn btn-gradient">Explorer→</a>
        </div>
    </div>
    <!-- end landing page -->

    <!--  start Recherche -->

    <div class="container" id="search">
    <?php include('message.php'); ?>
                <section class="book">        
                    <div class="flex">
                        <div class="input grid">         
                            <div class="box">
                                <label>De:</label>
                                <input type="text" placeholder="Comores">
                            </div>
                            <div class="box">
                                <label>A:</label>
                                <input type="text" placeholder="Maroc">
                            </div>
                            <div class="box">
                                <label>Aller:</label><br>
                                <input type="date" placeholder="Check-in-Date">
                            </div>
                            <div class="box">
                                <label>Retour:</label>
                                <input type="date" placeholder="Check-out-Date">
                            </div>
                            <div class="box">
                                <label>Adultes:</label> 
                                <input type="number" placeholder="0">
                            </div>
                            <div class="box">
                                <label>Enfants:</label> 
                                <input type="number" placeholder="0">
                            </div>
                            <div class="search">
                                <input type="submit" value="Chercher un vol">
                            </div>
                        </div>   
                    </div>
                </section>

    </div>

    <!--  end Recherche -->

    <!--  start Meilleur offre -->   
    <div class="offre" id="offre">
        <div class="heading">
            <h2> Meilleurs offres</h2>
            <p>Envie de créer un voyage sur mesure ?<br>
                Nous vous proposent les meilleures offres de voyages</p>
        </div>
        <div class="container">
            <div class="row">

                <div class="cards">
                    <div class="image">
                        <img src="public/imgs/hotel4.jpeg" alt="Maroc Voyage pexels"/>
                    </div>
                    <div class="title">
                        <h3>Maroc</h3>
                        <p>Hôtel Framissima Marrakech 4*</p>
                    </div>
                    <div class="des">
                        <a href="<?php base_url('offre.php') ?>" class="btn btn-gradient">Plus →</a>
                    </div>
                </div>

                <div class="cards">
                    <div class="image">
                        <img src="public/imgs/hotel1.jpeg" alt="Madagascar Voyage pexels"/>
                    </div>
                    <div class="title">
                        <h3>Madagascar</h3>
                        <p>Orchid Hôtel antananarivo 3*</p>
                    </div>
                    <div class="des">
                        <a href="#" class="btn btn-gradient">Plus →</a>
                    </div>
                </div>

                <div class="cards">
                    <div class="image">
                        <img src="public/imgs/hotel2.jpeg" alt="Egypt Voyage pexels"/>
                    </div>
                    <div class="title">
                        <h3>Egypte</h3>
                        <p>Hôtel Serenade <br>
                            Punta 5*</p>
                    </div>
                    <div class="des">
                        <a href="#" class="btn btn-gradient">Plus →</a>
                    </div>
                </div>

                <div class="cards">
                    <div class="image">
                        <img src="public/imgs/hotel3.jpeg" alt="Guinée Voyage pexels"/>
                    </div>
                    <div class="title">
                        <h3>Guinée</h3>
                        <p>Le Noom Hotel Conakry 4*</p>
                    </div>
                    <div class="des">
                        <a href="#" class="btn btn-gradient">Plus →</a>
                    </div>
                </div>

            </div>
        </div>
    </div>    
        <!--  end Meilleur offre -->

        <!--  start Nos packages-->
        
    <div class="package" id="package">
        <div class="heading">
            <h2>Nos packages</h2>
            <p>Envie de créer un voyage sur mesure ?<br>
                    Nous vous proposent les meilleures offres de voyages</p>
        </div>
        <div class="container">
            
            <div class="row">

                <div class="cards">
                    <div class="image">
                            <img src="public/imgs/namibie.jpeg" alt="Vols Afrique pexels">
                    </div>
                    <div class="info">
                        <h3 class="pack">Namibie</h3>
                        <h4>A partir de 299€</h4>
                        <p>Créez votre voyage sur-mesure en Namibie avec l'une de nos agences locale basée à destination.</p>
                        <a href="#" class="btn btn-gradient">Détails →</a>
                    </div>
                </div>

                <div class="cards">
                    <div class="image">
                            <img src="public/imgs/madagascar.jpeg" alt="Vols Afrique pexels">
                    </div>
                    <div class="info">
                        <h3 class="pack">Madagascar</h3>
                        <h4>A partir de 199€</h4>
                        <p>C'une destination qui saura vous émerveiller par ses paysages mêlant plages au sable blanc.</p>
                        <a href="#" class="btn btn-gradient">Détails →</a>
                    </div>
                </div>

                <div class="cards">
                    <div class="image">
                            <img src="public/imgs/egypte.jpeg" alt="Vols Afrique pexels">
                    </div>
                    <div class="info">
                        <h3 class="pack">Egypte</h3>
                        <h4>A partir de 250€</h4>
                        <p>Faire un safari en quad dans le désert à la découverte de la culture égyptienne.</p>
                        <a href="#" class="btn btn-gradient">Détails →</a>
                    </div>
                </div>



                <div class="cards">
                    <div class="image">
                            <img src="public/imgs/tunisie.jpeg" alt="Vols Afrique pexels">
                    </div>
                    <div class="info">
                        <h3 class="pack">Tunisie</h3>
                        <h4>A partir de 150€</h4>
                        <p>Et si un voyage en Tunisie était le plus court chemin vers le bonheur dans Un bond de la Méditerranée ?</p>
                        <a href="#" class="btn btn-gradient">Détails →</a>
                    </div>
                </div>

                <div class="cards">
                    <div class="image">
                            <img src="public/imgs/maroc.jpeg" alt="Vols Afrique pexels">
                    </div>
                    <div class="info">
                        <h3 class="pack">Maroc</h3>
                        <h4>A partir de 60€</h4>
                        <p>Envie de savourer de délicieux plats sur la place, de se détendre sur d'immenses plages au sable doré.</p>
                        <a href="#" class="btn btn-gradient">Détails →</a>
                    </div>
                </div>

                <div class="cards">
                    <div class="image">
                            <img src="public/imgs/botswana.jpg" alt="Vols Afrique pexels">
                    </div>
                    <div class="info">
                        <h3 class="pack">botswana</h3>
                        <h4>A partir de 199€</h4>
                        <p>Pays d'Afrique australe, le Botswana, trop méconnu, recèle des joyaux, entre déserts, forêts et savanes.</p>
                        <a href="#" class="btn btn-gradient">Détails →</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--  end Nos packages -->

<?php
include('includes/footer.php');

?>
<script src="public/js/master.js"></script>
</body>
</html>