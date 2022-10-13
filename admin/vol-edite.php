<?php
include('../config/app.php');
include_once('../controllers/AuthenticationController.php');

$authenticated = new AuthenticationController;
$authenticated->admin();

include_once('controllers/VolController.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">

    <div class="row mt-4">
        <div class="col-md-12">

        <?php include('../message.php')?>

            <div class="card">
                <div class="card-header">
                    <h4>Modifier un vol</h4>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $vol_id = validateInput($db->conn, $_GET['id']);
                        $vol = new VolController;
                        $result = $vol->edit($vol_id);
                        if($result)
                        {
                            ?>
                            <form action="codes/vol-code.php" method="POST">
                                <input type="hidden" name="vol_id" value="<?=$result['id_client']?>">
                                <div class="mb-3">
                                    <label for="">Ville de depart</label>
                                    <input type="text" name="depart" value="<?= $result['depart']?>" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Ville d'arriver</label>
                                    <input type="text" name="arriver" value="<?= $result['arriver']?>" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Date d'aller</label>
                                    <input type="date" name="aller" value="<?= $result['aller']?> required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Date de retour</label>
                                    <input type="date" name="retour" value="<?= $result['retour']?>" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_vol" class="btn btn-primary">Modifier le vol</button>
                                </div>
                            </form>
                    <?php
                        }else{
                            echo"<h4>Erreur</h4>";
                        }
                    }
                    else
                    {
                        echo"<h4>Erreur</h4>";
                    }
                    ?>

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