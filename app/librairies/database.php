<?php
require_once "/var/www/html/app/config/config.php";
class Database {
    private $db_name = DB_NAME;
    private $db_user = DB_USER;
    private $password= DB_PASSWORD;
    private $host= DB_HOST;
    private $connection;
    private $statement;





    function __construct(){
        try{
            $this->connection= new PDO("mysql:host=$this->host; dbname=".$this->db_name , $this->db_user, $this->password);
            echo "connected \n";
        }catch(PDOException $e){
            echo "connection failed \n";
        }
    }
    public function prepare($sql){
        $this->statement= $this->statement=$this->connection->prepare($sql);
    }
    public function execute(){
        $this-> statement->execute();
    }
    public function single(){
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }
    public function resultSet(){
        return $this->statement->fetchall(PDO::FETCH_ASSOC);
    }
    public function rowCount(){
        return $count = $del->rowCount();
}

}