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
            $this->db = new mysqli("localhost", "root", "", "masterdatabas");
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
    function select()
    {
        $SQL = "Queries";
    }
    function insert($table, $dt){
        // echo "<pre>";
        // print_r($dt);
        // print_r(array_keys($dt));
        // echo "</pre>";
        $clm = implode(",",array_keys($dt));
        // echo $clm;
        $vals = implode("','",$dt);
        echo $SQL = "INSERT INTO $table($clm) VALUES('$vals')";
        // echo "<br> INSERT INTO `users`(`username`, `fullname`, `email`, `password`,  `mobile`, `gender`, `hobby`, `prof_pic`, `city`, `status`, `address`) VALUES ('uname','something name','mail@mail','123','987987987','Male','Cricket','defauklt.jpg','1','0','vastrapur')";

    }
    function udpate() {
        $SQL = "Queries";
    }
    function delete() {
        $SQL = "Queries";
    }
}

// $Model = new Model;
