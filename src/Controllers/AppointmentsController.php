<?php

namespace App\Controller;

use App\Models\Appointment;
use App\Tools\View;

class AppointmentController
{

    public function __construct()
    {
        if (isset($_GET['action']) == 'delete') {
            $this->delete($_GET['id']);
            return;
        }

        if (isset($_GET['action']) == 'store') {
            $this->store($_POST);
            return;
        }

        if (isset($_GET['action']) == 'edit') {
            $this->edit($_GET['id']);
            return;
        }

        if (isset($_GET['action']) == 'create') {
            $this->create();
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

        new View("form", ["appointment" => $appointment]);
    }

    public function delete(int $id)
    {
        $model = new Appointment();
        $appointment = $model->findById($id);
        $appointment->destroy();

        $this->index();
    }
}
