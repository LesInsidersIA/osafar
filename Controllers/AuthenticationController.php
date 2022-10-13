<?php
class AuthenticationController
{

    public function __construct(){
        $db = new DatabaseConnection;
        $this->conn = $db->conn;

        $this->checkIsLoggedIn();
    }

    public function admin()
    {
        $user_id = $_SESSION['auth_user']['user_id']; 
        $checkAdmin = "SELECT id_client,role_as FROM client WHERE id_client='$user_id' AND role_as='1' LIMIT 1";
        $result = $this->conn->query($checkAdmin);
        if($result->num_rows == 1){
            return true;
        }else{
            redirect("Vous n'etes pas admin","index.php");
        }
    }
    private function checkIsLoggedIn()
    {
        if(!isset($_SESSION['authenticated']))
        {
            redirect("Se connecter pour accéder a la page", "login.php");
            return false;
        }else{
            return true;
        }
    }

    public function authDetail()
    {
        $checkAuth = $this->checkIsLoggedIn();
        if($checkAuth)
        {
            $user_id = $_SESSION['auth_user']['user_id'];

            $getUserData = "SELECT * FROM client WHERE id_client='$user_id' LIMIT 1";
            $result = $this->conn->query($getUserData);
            if($result->num_rows >0 ){
                
                $data = $result->fetch_assoc();
                return $data;
            }else{
                redirect("Erreurs", "login.php");
            }
        }else{
            return false;
        }
    }
}


?>