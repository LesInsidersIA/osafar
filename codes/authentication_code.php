<?php
include_once('controllers/RegisterController.php');
include_once('controllers/LoginController.php');

$auth = new LoginController;

if(isset($_POST['logout_btn']))
{
    $checkedLoggedOut = $auth->logout();
    if($checkedLoggedOut){
        redirect("Vous  êtes déconnectés", "login.php");
    }
}

if(isset($_POST['login_btn']))
{
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);

    
    $checkLogin = $auth->userLogin($email, $password);
    if($checkLogin)
    {
        if($_SESSION['auth_role'] == '1'){
            redirect("Vous êtes connectés", "admin/index.php");
        }else{
            redirect("Vous êtes connectés", "index.php");
        }
        
    }else{
        redirect("L'adresse mail ou le mot de passe n'est pas valide", "login.php");
    }
}




if(isset($_POST['register_btn']))
{
    $fname = validateInput($db->conn, $_POST['fname']);
    $lname = validateInput($db->conn, $_POST['lname']);
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);
    $confirm_password = validateInput($db->conn, $_POST['confirm_password']);

    $register = new RegisterController;
    $result_password = $register->confirmPassword($password, $confirm_password);
    if($result_password)
    {
        $result_user = $register->isUserExists($email);
        if($result_user){
            redirect("Adresse mail éxiste déja", "register.php");
        }else{
            $register_query = $register->registration($fname, $lname, $email, $password);
            if($register_query){
                redirect("Compte créer avec succée", "login.php");
            }else{
                redirect("Erreur", "register.php");
            }
        }

    }else{
        redirect("le mot de passe et la confirmation de mot de passe ne sont pas identique", "register.php");
    }
}
?>