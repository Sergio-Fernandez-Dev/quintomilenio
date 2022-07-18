<?php

namespace App\Controller;

use App\Models\Appointment;
use App\Tools\View;
use PharIo\Manifest\Application;
use PhpParser\Node\Arg;

class AppointmentController
{
     
    public function __construct()
    {
        if(isset($_GET['action']) == 'delete') {
            $this->delete($_GET['id']);
            return;
        }
        $this->index();
    }

    public function index()
    {
        $model = new Appointment();
        $appointments = $model->all();
        new View('appointmentsList', ['appointments' => $appointments]);
    }

    public function create()
    {
        new View('form');
    }
    public function store()
    {
        //TO-DO
    }
    public function edit()
    {
        //TO-DO
    }

    public function delete(int $id) {
    {
        $model = new Appointment();
        $appointment = $model->findById($id);
        $appointment->delete();

        $this->index();
    }
}
