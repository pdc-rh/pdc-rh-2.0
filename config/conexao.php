<?php
class Conexao{
    private $dbname;
    private $dbpassword;
    private $dbservice;
    
    public function __construct() {
        $this->dbname = "";
        $this->dbpassword = "";
        $this->dbservice = "";
    }
    
    public function getDbnome(){
        return $this->dbname;
    }
    
    public function getDbpassword(){
        return $this->dbpassword;
    }
    
    public function getDbservice(){
        return $this->dbservice;
    }


    public function setDbnome($dbname){
        $this->dbname=$dbname;
    }
    
    public function setDbpassword($dbpassword){
        $this->dbpassword=$dbpassword;
    }
    
    public function setDbservice($dbservice){
        $this->dbservice=$dbservice;
    }

    public function connect(){
        $con=oci_connect($this->dbname, $this->dbpassword, $this->dbservice);
        if($con){
            return $con;
        }
        return NULL;
    }
}
?>