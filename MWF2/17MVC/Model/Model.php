<?php
date_default_timezone_set('Asia/Kolkata');
class Model {
    // public $connection = new mysqli("hostname","username","password","dbname") 
    // public $connection = new mysqli("localhost","root","","masterdatabase"); 
    public $connection = null; 
    public function __construct() {
        try {
            $this->connection = new mysqli("localhost","root","","masterdatabase"); 
            // echo "<pre>";
            // print_r($this->connection);
            // echo "</pre>";
        } catch (\Throwable $th) {
            // echo "<pre>";
            // print_r($th->getMessage());
            // echo "</pre>";
            if (!file_exists('log')) {
                mkdir("log");
            } 
            $ErrorMsg = PHP_EOL."Error Msg  >>> ".$th->getMessage().PHP_EOL;
            $ErrorMsg .= "Error Date >>> ".date("d-M-Y H:i:s A").PHP_EOL;
            $FileName = "log/error_log_".date('d_M_Y').".txt";
            file_put_contents($FileName,$ErrorMsg,FILE_APPEND);
                
        }
    }
    function login($uname,$pass){
        $SQL = "SELECT * FROM users WHERE password = '$pass' AND (username='$uname' OR email ='$uname' OR mobile ='$uname')";
        $SQLEx = $this->connection->query($SQL);
        // print_r($SQLEx->num_rows);
        if ($SQLEx->num_rows > 0 ) {
            // $FetchData = $SQLEx->fetch_all(); // return multiple data in index array
            // echo "<pre>";
            // print_r($FetchData);
            // echo "<pre>";
            // $FetchData = $SQLEx->fetch_array(); // return data in Associative and numeric array
            // echo "<pre>";
            // print_r($FetchData);
            // echo "<pre>";
            // $FetchData = $SQLEx->fetch_assoc(); // return data in Associative array
            // echo "<pre>";
            // print_r($FetchData);
            // echo "<pre>";
            // $FetchData = $SQLEx->fetch_column(); //return column
            // echo "<pre>";
            // print_r($FetchData);
            // echo "<pre>";
            // $FetchData = $SQLEx->fetch_field(); // DB and table info 
            // echo "<pre>";
            // print_r($FetchData);
            // echo "<pre>";
            // $FetchData = $SQLEx->fetch_fields(); // DB Fields info 
            // echo "<pre>";
            // print_r($FetchData);
            // echo "<pre>";
            // $FetchData = $SQLEx->fetch_row(); // single numeric data
            // echo "<pre>";
            // print_r($FetchData);
            // echo "<pre>";
            $FetchData = $SQLEx->fetch_object();
            // echo "<pre>";
            // print_r($FetchData);
            // echo "<pre>";
            $ResData["Data"] =$FetchData ; 
            $ResData["Code"] =1 ; 
            $ResData["Msg"] ="Success"; 
        }else{
            $ResData["Data"] =0 ; 
            $ResData["Code"] =0 ; 
            $ResData["Msg"] ="try again"; 
        }
        return $ResData;
    }
    function select($tbl){
        $SQL = "SELECT * FROM $tbl";
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx->num_rows > 0 ) {
            while ( $Data = $SQLEx->fetch_object()) {
                $FetchData[] = $Data;    
            }
            $ResData["Data"] =$FetchData ; 
            $ResData["Code"] =1 ; 
            $ResData["Msg"] ="Success"; 
        }else{
            $ResData["Data"] =0 ; 
            $ResData["Code"] =0 ; 
            $ResData["Msg"] ="try again"; 
        }
        return $ResData;   
    }
    function selectWhere($tbl,$where){
        $SQL = "SELECT * FROM $tbl";
        
        $SQL .= " WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= " $key = '$value' AND";
            # code...
        }
        // echo $SQL;
        // $SQL = trim($SQL,"AND");
        $SQL = rtrim($SQL,"AND");
        // echo "<br>";
        // echo $SQL;
        // exit;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx->num_rows > 0 ) {
            while ( $Data = $SQLEx->fetch_object()) {
                $FetchData[] = $Data;    
            }
            $ResData["Data"] =$FetchData ; 
            $ResData["Code"] =1 ; 
            $ResData["Msg"] ="Success"; 
        }else{
            $ResData["Data"] =0 ; 
            $ResData["Code"] =0 ; 
            $ResData["Msg"] ="try again"; 
        }
        return $ResData;   
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
    function update($tbl,$data,$where){
        $SQL = "UPDATE $tbl SET";

        foreach ($data as $dkey => $dvalue) {
            $SQL .= " $dkey = '$dvalue' ,";
            # code...
        }
        $SQL = rtrim($SQL,",");
        $SQL .= " WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= " $key = '$value' AND";
            # code...
        }
        $SQL = rtrim($SQL,"AND");
        // echo $SQL;
        // exit;
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

    function delete($tbl,$where){
        $SQL = "DELETE FROM $tbl WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = '$value' AND";
        }
        $SQL = rtrim($SQL,"AND");
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0 ) {
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
