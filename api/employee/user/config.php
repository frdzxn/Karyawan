<?php
class Database{
    private $host   =   "localhost";
    private $uname  =   "root";
    private $pass   =   "";
    private $db     =   "karyawan";

    public function connect() {

        $mysql = new mysqli($this->host, $this->uname,$this->pass,$this->db);

        if ($mysqli->connect_error){
            echo "Gagal Terkoneksi ke Database :
            (".$mysqli->connect_error.")";
        }
        return $mysqli;
    }

}
?>
