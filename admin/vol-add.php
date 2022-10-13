<?php
include('../config/app.php');
include_once('../controllers/AuthenticationController.php');

$authenticated = new AuthenticationController;
$authenticated->admin();

include('includes/header.php');
?>

<div class="container-fluid px-4">

    <div class="row mt-4">
        <div class="col-md-12">

        <?php include('../message.php')?>

            <div class="card">
                <div class="card-header">
                    <h4>Ajouter un vol</h4>
                </div>
                <div class="card-body">

                    <form action="codes/vol-code.php" method="POST">
                        <div class="mb-3">
                            <label for="">Ville de depart</label>
                            <input type="text" name="depart" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Ville d'arriver</label>
                            <input type="text" name="arriver" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Date d'aller</label>
                            <input type="date" name="aller" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Date de retour</label>
                            <input type="date" name="retour" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_vol" class="btn btn-primary">Enregistrer le vol</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    </div>

</div>






<?php
include('includes/footer.php');
include('includes/scripts.php');

?>