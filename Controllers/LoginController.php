<?php

class LoginController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function userLogin($email, $password)
    {
        $checkLogin = "SELECT * FROM client WHERE email='$email' AND password='$password' LIMIT 1";
        $result = $this->conn->query($checkLogin);
        if($result->num_rows > 0)
        {
            $data = $result->fetch_assoc();
            $this->userAuthentication($data);
            return true;
        }else{
            return false;
        }
    }

    private function userAuthentication($data)
    {
        $_SESSION['authenticated'] = true;
        $_SESSION['auth_role'] = $data['role_as'];
        $_SESSION['auth_user'] = [
            'user_id' => $data['id_client'],
            'user_fname' => $data['fname'],
            'user_lname' => $data['lname'],
            'user_email' => $data['email'],
        ] ;
    }

    public function isLoggedIn(){
        if(isset($_SESSION['authenticated']) === TRUE)
        {
            redirect('Vous êtes connecter.', 'index.php');
        }else{
            return false;
        }
    }
    
    public function logout(){
        if(isset($_SESSION['authenticated']) === TRUE)
        {
            unset($_SESSION['authenticated']);
            unset($_SESSION['auth_user']);
            return true;
        }else{
            return false;
        }
    }
}       
?>