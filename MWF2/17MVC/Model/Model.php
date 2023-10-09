<?php
date_default_timezone_set('Asia/Kolkata');
class Model {
    // public $connection = new mysqli("hostname","username","password","dbname") 
    // public $connection = new mysqli("localhost","root","","masterdatabase"); 
    public $connection = null; 
    public function __construct() {

        try {
            $this->connection = new mysqli("localhost","root","","masterdatabase"); 
            echo "<pre>";
            print_r($this->connection);
            echo "</pre>";
        } catch (\Throwable $th) {
            echo "<pre>";
            print_r($th->getMessage());
            echo "</pre>";
            if (!file_exists('log')) {
                mkdir("log");
            } 
            $ErrorMsg = PHP_EOL."Error Msg  >>> ".$th->getMessage().PHP_EOL;
            $ErrorMsg .= "Error Date >>> ".date("d-M-Y H:i:s A").PHP_EOL;
            $FileName = "log/error_log_".date('d_M_Y').".txt";
            file_put_contents($FileName,$ErrorMsg,FILE_APPEND);
                
        }
    }
    function insert($tbl,$data){
        // echo "<pre>";
        // print_r($data);
        // $clm = array_keys($data);
        // print_r($clm);
        $clm = implode(",",array_keys($data));
        $vals = implode("','",$data);
        // echo "</pre>";
        $SQL = "INSERT INTO $tbl ($clm) VALUES ('$vals')";
        $SQLEx = $this->connection->query($SQL);
        // print_r($SQLEx);
        if ($SQLEx>0 ) {
            $ResData["Data"] =1 ; 
            $ResData["Code"] =1 ; 
            $ResData["Msg"] ="Success"; 
        }else{
            $ResData["Data"] =0 ; 
            $ResData["Code"] =0 ; 
            $ResData["Msg"] ="try again"; 
        }
        return $ResData;
    }
}

// $Model = new Model;


?>