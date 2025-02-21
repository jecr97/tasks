<?php

namespace App\Controllers;

use App\Models\taskModel;



class Home extends BaseController
{

    public function __construct()
    {
        // Establecer los encabezados CORS en el constructor
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");
    }

    public function index(): string
    {
        return view('index');
    }

    // CONSULTA LA TABLA DE TASKS
    public function getTasks()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");

        $modelTaks = new taskModel();

        $consulta = $modelTaks->getTasks();

        return json_encode($consulta);
    }

    // AGREGAR TAREA
    public function postTask()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
            header("Access-Control-Allow-Headers: Content-Type, Authorization");
            exit(0);
        }

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");

        $modelTaks = new taskModel();

        $inputData = $this->request->getJSON();

        $datos = [
            'Title' => $inputData->Title,
            'Description' => $inputData->Description,
            'Completed' => 0,
            'Created_at' => date('Y-m-d H:i:s')
        ];

        $agregar = $modelTaks->postTask($datos);

        return json_encode($agregar);
    }

    // ACTUALIZAR TAREA
    public function putTask($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
            header("Access-Control-Allow-Headers: Content-Type, Authorization");
            exit(0);
        }

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");

        $modelTaks = new taskModel();

        $inputData = $this->request->getJSON();

        $datos = [
            'Title' => $inputData->Title,
            'Description' => $inputData->Description,
            'Completed' => $inputData->Completed,
            'Updated_at' => date('Y-m-d H:i:s')
            // 'Completed' => $inputData->Completed
        ];

        $actualizar = $modelTaks->putTask($id, $datos);

        return json_encode($actualizar);
    }

    // ELIMINAR TAREA
    public function deleteTask($id)
    {

        $modelTaks = new taskModel();

        $data = [
            'Status' => 'Inactivo'
        ];

        $eliminar = $modelTaks->deleteTask($id, $data);

        return json_encode($eliminar);
    }
}
