<?php
    session_start();
    function isloggedIn(){
        if(isset($_SESSION['doctor_id'])){
            return true;
        }else{
            return false;
        }
    }