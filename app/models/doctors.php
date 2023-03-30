<?php
require_once "/var/www/html/app/librairies/database.php";
Class Doctor{
    private $id;
    private $name;
    private $email;
    private $password;
    private $db;

    function __construct(){
        $this->db= new Database();
    }
    public function fetchDoctorByEmail($email){
        $sql="select * from doctors where email=".$email.";";
        $this->db->prepare($sql);
        $this->db->excecute();
        $tab =$this->db->single();
    }
    public function login($email, $password){
        $sql="select password from doctors where email='".$email."';";
        $this->db->prepare($sql);
        $this->db->execute();
        $res=$this->db->single()['password'];
        if($res===$password){
            return $res;
        }else{
            return false;
        }
    }
    public function register($data){
        $sql="INSERT INTO doctors (name, email, password, specially) VALUES (".$data['name'].",".$data['email'].",". $data['password'].",".$data['specially'].");";
        $this->db->prepare($sql);
        $this->db->execute();

    }
    public function getDoctorById($doctor_id){
        $sql="select * from doctors where id=".$doctor_id.";";
        $this->db->prepare($sql);
        $this->db->execute();
        return $this->db->single();

    }
}
$x = new Doctor();
$data=['id'=>3, 'name'=> '"Jules"', 'email'=>'"jules@insa.fr"','password'=>'"julesschell"','specially'=>'"psycologue"'];
$j=$x->register($data);
var_dump($j);
