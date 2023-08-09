<?php
date_default_timezone_set('Asia/Kolkata');
class model
{

    public function __construct(protected $connection = null)
    {
        try {
            $this->connection = new mysqli("localhost", "root", "", "bankassessment");
        } catch (\Exception $e) {
            //    $ErrorMsg = $e->getMessage();
            $ErrorMsg = PHP_EOL . "Error Date Time>>>" . date('d-m-Y h:i:s A') . PHP_EOL . "Error Msg>>>" . $e->getMessage() . PHP_EOL;
            if (!file_exists("log")) {
                mkdir('log');
            }
            $FileName = date("d_m_Y");
            file_put_contents("log/" . $FileName . "_log.txt", $ErrorMsg, FILE_APPEND);
            // echo $ErrorMsg;
        }
    }
    public function Insert($tbl, $data)
    {
        $clm = implode(",", array_keys($data));
        $val = implode("','", $data);
        $SQL = " INSERT INTO $tbl ($clm) VALUES ('$val') ";
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        // print_r($SQLEx);
        if ($SQLEx > 0) {
            $ResponceData['Code'] = "1";
            $ResponceData['Mag'] = "Success";
            $ResponceData['Data'] = "1";
        } else {
            $ResponceData['Code'] = "0";
            $ResponceData['Mag'] = "Try Again";
            $ResponceData['Data'] = "0";
        }
        return $ResponceData;
    }
    public function Login($uname, $pass)
    {
        $SQL = " SELECT * FROM users WHERE password = '$pass' AND (username = '$uname' OR phone = '$uname' OR email = '$uname')";
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        // print_r($SQLEx);
        if ($SQLEx->num_rows > 0) {
            $FetchData = $SQLEx->fetch_object();

            $ResponceData['Code'] = "1";
            $ResponceData['Mag'] = "Success";
            $ResponceData['Data'] = $FetchData;
        } else {
            $ResponceData['Code'] = "0";
            $ResponceData['Mag'] = "Try Again";
            $ResponceData['Data'] = "0";
        }
        return $ResponceData;
    }
    public function Select($tbl, $where)
    {
        $SQL = " SELECT * FROM $tbl WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= " $key = '$value ' AND";
        }
        $SQL = rtrim($SQL, "AND");
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        // print_r($SQLEx);
        if ($SQLEx->num_rows > 0) {
            while ($data = $SQLEx->fetch_object()) {
              $FetchData[] = $data;
            }
            // $FetchData = $SQLEx->fetch_object();

            $ResponceData['Code'] = "1";
            $ResponceData['Mag'] = "Success";
            $ResponceData['Data'] = $FetchData;
        } else {
            $ResponceData['Code'] = "0";
            $ResponceData['Mag'] = "Try Again";
            $ResponceData['Data'] = "0";
        }
        return $ResponceData;
    }
    // public function Update(){
    //     $SQL = "";
    //     $SQLEx = "" ;
    // }
    // public function Delete(){
    //     $SQL = "";
    //     $SQLEx = "" ;
    // }

}
