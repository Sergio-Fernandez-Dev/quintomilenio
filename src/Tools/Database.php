<?php

class Database{

    private $connection;

    public function __construct(){
        try{
            $this->connection = $this->setConnection();
            
        }

        catch(PDOException $error){
            echo "conexión fallida: ".$error->getMessage();

        }
        
    }

    private function setConnection(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database ="consultorioquintomilenio";
        $charset = "utf-8";
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=$charset",$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);   
        
        return $pdo;

    }

    public function getConnection(){
        return $this->connection;
    }

}