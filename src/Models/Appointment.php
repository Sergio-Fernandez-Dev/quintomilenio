<?php

namespace App\Models;

use App\Tools\Database;



class Appointment{
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

        
    public function allAppointment(){
        $query = $this->database->getConnection()->query("SELECT * FROM {$this->table}");
        $appointmentArray = $query->fetchAll();
        $appointmentList = [];
        foreach($appointmentArray as $appointment ){
            $appointmentItem = new Appointment(
                $appointment["id"],
                $appointment["name"],
                $appointment["phone"],
                $appointment["email"],
                $appointment["user_query"],
                $appointment["date_time"]);
                array_push($appointmentList, $appointmentItem);
        }
        return $appointmentList;
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

    public function findById($itemId){
        $query = $this->database->getConnection()->query("SELECT * FROM {$this->table} WHERE id={$itemId}"); 
        $result = $query->fetchAll();
        return new Appointment (
            $result[0]["id"],
            $result[0]["name"],
            $result[0]["phone"],
            $result[0]["email"],
            $result[0]["user_query"],
            $result[0]["date_time"]);
    }


    public function destroy(){
        $this->database->getConnection()->query("DELETE FROM {$this->table} WHERE id= {$this->id}");
    }


    public function saveAppointment (){
        $this->database->getConnection()->query("INSERT INTO {$this->table} (id, name, phone, email, date_time, user_query) values (Null,'$this->name', '$this->phone', '$this->email',current_timestamp(), '$this->user_query')");
    }

    public function updateAppointment (){
        $this->database->getConnection()->query("UPDATE {$this->table} SET `name` = '{$this->name}', `phone` = '{$this->phone}', `email` = '{$this->email}', `user_query` = '{$this->user_query}' WHERE  `id` = {$this->id}");
    }
}
