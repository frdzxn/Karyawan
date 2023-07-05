<?php
require_once "config.php";
class User{
    private $db;
    function __construct(){
        $this->db = new Database();
    }
    function view(){
        $mysqli = $this->db->connect();
        $sql = "SELECT * FROM user Order BY id ASC";
        $result = $mysqli->query($sql);
        while ($data = $result->fetch_assoc()) { //array
            $hasil[] = $data;
        $mysqli->close();
        return var_dump($hasil);
    }
    }
    function insert($name, $email, $age, $designation) {
        $mysqli = $this->db->connect();
        $name = $mysqli->real_escape_string($name);
        $email = $mysqli->real_escape_string($email);
        $age = $mysqli->real_escape_string($age);
        $designation = $mysqli->real_escape_string($designation);

        // sql statement untuk insert data siswa
        $sql = "INSERT INTO employee (name, email, age, designation) 
            VALUES ('$name','$email','$age','$designation')";

        $result = $mysqli->query($sql);
        // cek hasil query
        if($result){
            header("Location: login.php");
        }
        else{

        }
        // menutup koneksi database
        $mysqli->close();
    }

}
?>