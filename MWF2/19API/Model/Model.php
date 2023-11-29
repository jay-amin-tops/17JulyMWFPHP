<?php

class Model
{
    public $Connection = "";
    public function __construct()
    {
        try {
            $this->connection = new mysqli("localhost", "root", "", "eventmanagment");
        } catch (\Throwable $th) {
            if (!file_exists('log')) {
                mkdir("log");
            }
            $ErrorMsg = PHP_EOL . "Error Msg  >>> " . $th->getMessage() . PHP_EOL;
            $ErrorMsg .= "Error Date >>> " . date("d-M-Y H:i:s A") . PHP_EOL;
            $FileName = "log/error_log_" . date('d_M_Y') . ".txt";
            file_put_contents($FileName, $ErrorMsg, FILE_APPEND);
        }
    }
    public function insert($tbl, $data)
    {
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $clm = implode(",", array_keys($data));
        $vals = implode("','", $data);
        $SQL = "INSERT INTO $tbl($clm) VALUES ('$vals')";
        $SQLEx = $this->connection->query($SQL);
        // echo "<pre>";
        // print_r($SQLEx);
        // echo "</pre>";
        if ($SQLEx > 0) {
            $ResData['Data'] = 1;
            $ResData['Msg'] = "Success";
            $ResData['Code'] = "1";
        } else {
            $ResData['Data'] = 0;
            $ResData['Msg'] = "Try again";
            $ResData['Code'] = "0";
        }
        return $ResData;
        // $SQLEx = ""
    }
    public function login($uname, $password)
    {
        // $SQL = "SELECT * FROM users WHERE username='test' AND password='test'";
        $SQL = "SELECT * FROM users WHERE password='$password' AND (username='$uname' OR email='$uname' OR mobile='$uname')";
        $SQLEx = $this->connection->query($SQL);
        // echo "<pre>";
        // print_r($SQLEx);
        // echo "</pre>";
        if ($SQLEx->num_rows > 0) {
            $FetchData = $SQLEx->fetch_object();
            $ResData['Data'] = $FetchData;
            $ResData['Msg'] = "Success";
            $ResData['Code'] = "1";
        } else {
            $ResData['Data'] = 0;
            $ResData['Msg'] = "Try again";
            $ResData['Code'] = "0";
        }
        return $ResData;
        // $SQLEx = ""
    }
    public function select($tbl, $where = "")
    {
        $SQL = "SELECT * FROM $tbl";
        if ($where != "") {
            $SQL .= " WHERE ";
            foreach ($where as $key => $value) {
                $SQL .= " $key = $value";
            }
        }
        // echo $SQL;
        // exit;
        $SQLEx = $this->connection->query($SQL);
        // echo "<pre>";
        // print_r($SQLEx);
        // echo "</pre>";
        if ($SQLEx->num_rows > 0) {
            while ($Data = $SQLEx->fetch_object()) {
                $FetchData[] = $Data;
            }
            $ResData['Data'] = $FetchData;
            $ResData['Msg'] = "Success";
            $ResData['Code'] = "1";
        } else {
            $ResData['Data'] = 0;
            $ResData['Msg'] = "Try again";
            $ResData['Code'] = "0";
        }
        return $ResData;
        // $SQLEx = ""
    }
    public function update($tbl, $data, $where)
    {
        $SQL = "UPDATE $tbl SET";
        foreach ($data as $dkey => $dvalue) {
            $SQL .= " $dkey = '$dvalue' ,";
        }
        // echo $SQL;
        $SQL = rtrim($SQL, ",");
        $SQL .= "WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = $value AND";
        }
        $SQL = rtrim($SQL, "AND");
        // echo $SQL;
        // echo $SQL;
        // exit;

        $SQLEx = $this->connection->query($SQL);
        // echo "<pre>";
        // print_r($SQLEx);
        // echo "</pre>";
        if ($SQLEx > 0) {
            $ResData['Data'] = "1";
            $ResData['Msg'] = "Success";
            $ResData['Code'] = "1";
        } else {
            $ResData['Data'] = 0;
            $ResData['Msg'] = "Try again";
            $ResData['Code'] = "0";
        }
        return $ResData;
        // $SQLEx = ""
    }
    public function delete($tbl, $where)
    {
        $SQL = "DELETE FROM $tbl WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = $value";
        }
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $ResData['Data'] = "1";
            $ResData['Msg'] = "Success";
            $ResData['Code'] = "1";
        } else {
            $ResData['Data'] = 0;
            $ResData['Msg'] = "Try again";
            $ResData['Code'] = "0";
        }
        return $ResData;
        // $SQLEx = ""
    }
    public function selectwhere($tbl, $where)
    {
        $SQL = "SELECT * FROM $tbl WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = $value";
        }
        echo $SQL;

        $SQLEx = $this->connection->query($SQL);
        // echo "<pre>";
        // print_r($SQLEx);
        // echo "</pre>";
        if ($SQLEx->num_rows > 0) {
            while ($Data = $SQLEx->fetch_object()) {
                $FetchData[] = $Data;
            }
            $ResData['Data'] = $FetchData;
            $ResData['Msg'] = "Success";
            $ResData['Code'] = "1";
        } else {
            $ResData['Data'] = 0;
            $ResData['Msg'] = "Try again";
            $ResData['Code'] = "0";
        }
        return $ResData;
        // $SQLEx = ""
    }
}
