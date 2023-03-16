<?php
class mobileWEBSITE{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getMobile()
    {
        $sql = "SELECT * FROM mobile";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $data = json_encode($result);
            return $data;
        }else {
            return false;
        }
    }

    public function getMobileDetail($id)
    {
        $sql = "SELECT * FROM mobile where id = ".$id;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $data = json_encode($result);
            return $data;
        }else {
            return false;
        }
    }
}
?>