<?php

namespace App\Controllers;

use App\Core\Views;
use App\Models\AppointmentControllers;

class CodersController{

    public function __construct(){

        $this->index();
    }

    public function index(){

        $name_surnames = new name_surnames;

       $name_surnames = $name_surnames->all();
       new View("name_surnamesList", ["name_surnames"=> $name_surnames]);
    }

}