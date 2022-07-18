<?php

namespace App\Models;

use App\Tools\Database;

class UsersMilenio{
    private ?int $id;
    private string $name;
    private string $phone;
    private string $email;
    private string $user_query;
    private ?string $date_time;

    private $database;
    private $table ="quintomilenio";

    public function __construct(int $id = null, string $name = "", string $phone = "", string $email = "", string $user_query = "", string $date_time = null ){
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->user_query = $user_query;
        $this->date_time = $date_time;

        if (!$this->database){
            $this->database = new Database();
        }

    }


    
public function allUsers (){
    $query = $this->database->getConnection()->query("SELECT * FROM {$this->table}");
      $userArray = $query->fetchAll();
      $userList = [];
      foreach($userArray as $user ){
        $userItem = new UsersMilenio(
            $user["id"],
            $user["name"],
            $user["phone"],
            $user["email"],
            $user["user_query"],
            $user["date_time"]);
            array_push($userList, $userItem);
      }
      return $userList;

}

public function getId(){
     return $this->id;
}
public function getName(){
    return $this->name;
}
public function getPhone(){
    return $this->phone;
}
public function getEmail(){
    return $this->email;
}
public function getUserQuery(){
    return $this->user_query;
}
public function getDateTime(){
    return $this->date_time;
}


}













?>

