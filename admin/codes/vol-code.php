<?php
include('../../config/app.php');
include_once('../controllers/VolController.php');



if(isset($_POST['deleteVol']))
{
    $id = validateInput($db->conn, $_POST['deleteVol']);
    $vol = new VolController;
    $result = $vol->delete($id);
    if($result){
        redirect("Le vol a était supprimé avec succée", "admin/vol-view.php");
    }else{
        redirect("Erreur", "admin/vol-view.php");
    }
}


if(isset($_POST['update_vol']))
{
    $id = validateInput($db->conn,$_POST['vol_id']);
    $inputData = [
        'depart' => validateInput($db->conn,$_POST['depart']),
        'arriver' => validateInput($db->conn,$_POST['arriver']),
        'aller' => validateInput($db->conn,$_POST['aller']),
        'retour' => validateInput($db->conn,$_POST['retour']),
    ];
    $vol = new VolController;
    $result = $vol->update($inputData, $id);
    if($result){
        redirect("Le vol a était modifié avec succée", "admin/vol-view.php");
    }else{
        redirect("Erreur", "admin/vol-view.php");
    }
}

if(isset($_POST['save_vol']))
{
    $inputData = [
        'depart' => validateInput($db->conn,$_POST['depart']),
        'arriver' => validateInput($db->conn,$_POST['arriver']),
        'aller' => validateInput($db->conn,$_POST['aller']),
        'retour' => validateInput($db->conn,$_POST['retour']),
    ];

    $vol = new VolController;
    $result = $vol->create($inputData);

    if($result){
        redirect("Vol ajouté avec succée", "admin/vol-add.php");
    }else{
        redirect("Erreur", "admin/vol-add.php");
    }
}

?>