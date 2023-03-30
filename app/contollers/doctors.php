<?php
class Doctors extends Controller{
    private $doctorModel;
    public function __construct(){
    $this->doctorModel = $this->model =$this->model("Doctor");
    }
    public function register(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            redirect("/var/www/html/app/views/doctors/login.php");

        }else{
            render("/var/www/html/app/views/doctors/register.php", $data);
        }
    }
}
register();