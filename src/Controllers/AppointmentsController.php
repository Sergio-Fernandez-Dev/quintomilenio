<?php

namespace App\Controllers;

use App\Models\Appointment;
use App\Core\View;

class AppointmentsController
{

    public function __construct()
    {
        if (isset($_GET['action']) && $_GET['action'] == 'delete') {
            $this->delete($_GET['id']);
            return;
        }

        if (isset($_GET['action']) && $_GET['action'] == 'store') {
            $this->store($_POST);
            return;
        }

        if (isset($_GET['action']) && $_GET['action'] == 'edit') {
            $this->edit($_GET['id']);
            return;
        }

        if (isset($_GET['action']) && $_GET['action'] == 'create') {
            $this->create();
            return;
        }

        if (isset($_GET['action']) && $_GET['action'] == 'update') {
            $this->update($_POST, $_GET['id']);
            return;
        }

        $this->index();
    }

    public function index()
    {
        $model = new Appointment();
        $appointments = $model->allAppointment();
        new View('appointmentsList', ['appointments' => $appointments]);
    }

    public function create()
    {
        new View('form', ["action" => 'store']);
    }

    public function store(array $request)
    {
        $model = new Appointment(
            id: null,
            name: $request["name"],
            phone: $request["phone"],
            email: $request["email"],
            user_query: $request["user_query"],
            date_time: null,
        );

        $model->saveAppointment();
        $this->index();
    }

    public function edit(int $id)
    {
        $model = new Appointment();
        $appointment = $model->findById($id);

        new View("form", ["appointments" => $appointment, "action" => 'update']);
    }

    public function delete(int $id)
    {
        $model = new Appointment();
        $appointment = $model->findById($id);
        $appointment->destroy();

        $this->index();
    }

    public function update($request, $id) {   
        $request = new Appointment(
            $id,  
            $request['name'], 
            $request['phone'],
            $request['email'], 
            $request['user_query'],
            null);

        $request->updateAppointment();
        $this->index();
    }
}
