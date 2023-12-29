<?PHP

date_default_timezone_set('Asia/Kolkata');

class Model
{
    public $db = "";
    // public $db = new mysqli("localhost","root","","masterdatabse");
    // $db = new mysqli("hostname","username","password","dbname");
    public function __construct()
    {
        try {
            // $this->db = new mysqli("localhost","root","","masterdatabase");
            $this->db = new mysqli("localhost", "root", "", "masterdatabase");
        } catch (\Exception $e) {
            //throw $th;
            // echo "<pre>";
            // print_r($e->getMessage());
            if (!file_exists("log")) {
                mkdir("log");
            }
            $fileName = "errorLog" . date('d_m_Y') . ".txt";
            // $fileName = "errorLog".date('d_m_Y_H_i_sA');
            $ErrorMsg = PHP_EOL . "Error Time >>> " . date("d-m-Y H:i:s A");
            $ErrorMsg .= PHP_EOL . "Error Msg  >>> " . $e->getMessage() . PHP_EOL;
            file_put_contents("log/" . $fileName, $ErrorMsg, FILE_APPEND);
            // echo "</pre>";
        }
    }
    // function select($tbl,array $where=[]){
    function select($tbl,$where=""){
        // $SQL = "SELECT * FROM $tbl";
        $SQL = "SELECT * FROM $tbl";
        if ($where != "") {
            $SQL .= " WHERE ";
            foreach ($where as $key => $value) {
                $SQL .= " $key = $value AND";
            }
            $SQL = rtrim($SQL,"AND");
        }
        // echo $SQL;
        $SQLEx = $this->db->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($Data = $SQLEx->fetch_object()) {
                $fetchData[] = $Data;
            }
            $Res["Code"] = 1;
            $Res["Msg"] = "Success";
            $Res["Data"] = $fetchData;
        } else {
            // echo "data na mlya";
            $Res["Code"] = 0;
            $Res["Msg"] = "try again";
            $Res["Data"] = 0;
            # code...
        }
        return $Res;
    }
    function selectwhere($tbl,$where){
        $SQL = "SELECT * FROM $tbl WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = $value AND";
        }
        $SQL = rtrim($SQL,"AND");
        // echo $SQL;
        // exit;
        $SQLEx = $this->db->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($Data = $SQLEx->fetch_object()) {
                $fetchData[] = $Data;
            }
            $Res["Code"] = 1;
            $Res["Msg"] = "Success";
            $Res["Data"] = $fetchData;
        } else {
            // echo "data na mlya";
            $Res["Code"] = 0;
            $Res["Msg"] = "try again";
            $Res["Data"] = 0;
            # code...
        }
        return $Res;
    }
    function login($uname, $pass)
    {
        $SQL = "SELECT * FROM users WHERE password='$pass' AND (username='$uname' OR email='$uname' OR mobile='$uname')";
        $SQLEx = $this->db->query($SQL);
        // echo "<pre>";
        // print_r($SQLEx);
        // echo "</pre>";
        if ($SQLEx->num_rows > 0) {
            // echo "Mdya data";
            // $fetchData = $SQLEx->fetch_column();
            // $fetchData = $SQLEx->fetch_array(); //[]associative and numeric array data res
            // $fetchData = $SQLEx->fetch_all(); // []numeric multidimension array data res
            // $fetchData = $SQLEx->fetch_assoc(); //[]associative array data res
            // $fetchData = $SQLEx->fetch_row();  // []numeric array data res
            // $fetchData = $SQLEx->fetch_field(); // []column_name
            $fetchData = $SQLEx->fetch_object(); // key->value
            // echo "<pre>";
            // print_r($fetchData);
            // echo "</pre>";
            $Res["Code"] = 1;
            $Res["Msg"] = "Success";
            $Res["Data"] = $fetchData;
        } else {
            // echo "data na mlya";
            $Res["Code"] = 0;
            $Res["Msg"] = "try again";
            $Res["Data"] = 0;
            # code...
        }
        return $Res;
    }
    function insert($table, $dt)
    {
        // echo "<pre>";
        // print_r($dt);
        // print_r(array_keys($dt));
        // echo "</pre>";
        $clm = implode(",", array_keys($dt));
        // echo $clm;
        $vals = implode("','", $dt);
        $SQL = "INSERT INTO $table($clm) VALUES('$vals')";
        // echo "<br> INSERT INTO `users`(`username`, `fullname`, `email`, `password`,  `mobile`, `gender`, `hobby`, `prof_pic`, `city`, `status`, `address`) VALUES ('uname','something name','mail@mail','123','987987987','Male','Cricket','defauklt.jpg','1','0','vastrapur')";
        // echo "<pre>";
        // print_r($this->db);
        // echo "</pre>";
        $SQLEx = $this->db->query($SQL);
        if ($SQLEx > 0) {
            $Res["Code"] = 1;
            $Res["Msg"] = "Success";
            $Res["Data"] = 1;
        } else {
            $Res["Code"] = 0;
            $Res["Msg"] = "Try again";
            $Res["Data"] = 0;
        }
        return $Res;
    }
    function udpate()
    {
        $SQL = "Queries";
    }
    function delete($tbl,$where)
    {
        $SQL = "DELETE FROM $tbl WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = $value AND";
        }
        $SQL = rtrim($SQL,"AND");
        // echo $SQL;
        // exit;
        $SQLEx = $this->db->query($SQL);
        if ($SQLEx > 0) {
            $Res["Code"] = 1;
            $Res["Msg"] = "Success";
            $Res["Data"] = 1;
        } else {
            // echo "data na mlya";
            $Res["Code"] = 0;
            $Res["Msg"] = "try again";
            $Res["Data"] = 0;
            # code...
        }
        return $Res;
    }
}

// $Model = new Model;
