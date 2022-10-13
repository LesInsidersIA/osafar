<?php

class VolController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function index()
    {
        $volQuery = "SELECT * FROM  vol";
        $result = $this->conn->query($volQuery);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }

    public function create($inputData)
    {
        $data = "'" . implode("','", $inputData) . "'";
        //echo $data;

        $volQuery = "INSERT INTO vol (depart,arriver,aller,retour) VALUES ($data)";
        $result = $this->conn->query($volQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function edit($id)
    {
        $vol_id = validateInput($this->conn, $id);
        $volQuery = "SELECT * FROM  vol WHERE id_client='$vol_id' LIMIT 1";
        $result = $this->conn->query($volQuery);
        if($result->num_rows == 1)
        {
            $data = $result->fetch_assoc(); 
            return $data; 
        }else{
            return false;
        }
    }

    public function update($inputData, $id)
    {
        $vol_id = validateInput($this->conn, $id);
        $depart = $inputData['depart'];
        $arriver = $inputData['arriver'];
        $aller = $inputData['aller'];
        $retour = $inputData['retour'];

        $volUpdateQuery = "UPDATE vol SET depart='$depart',arriver='$arriver',aller='$aller', retour='$retour' WHERE id_client='$vol_id' LIMIT 1 ";
        $result = $this->conn->query($volUpdateQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id)
    {
        $vol_id = validateInput($this->conn, $id);
        $volDeleteQuery = "DELETE FROM vol WHERE id_client='$vol_id' LIMIT 1 ";
        $result = $this->conn->query($volDeleteQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
?>