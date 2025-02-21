<?php

namespace App\Models;

use CodeIgniter\Model;

class taskModel extends Model
{

    // TABLAS
    protected $tableTasks = 'tasks';

    // CONSULTAR TAREAS
    public function getTasks()
    {
        $query = $this->db->table($this->tableTasks)
            ->where('Status', 'Activo');
        return $query->get()->getResultArray();
    }

    // INSERTAR TAREA
    public function postTask($data)
    {
        $query = $this->db->table($this->tableTasks)->insert($data);
        return $this->db->insertID();
    }

    // ACTUALIZAR TAREA
    public function putTask($id, $data)
    {
        $update = $this->db->table($this->tableTasks)
            ->where('Id', $id);
        return $update->update($data);
    }

    // ELIMINAR TAREA
    public function deleteTask($id, $data) {
        $update = $this->db->table($this->tableTasks)
            ->where('Id', $id);
        return $update->update($data);
    }
    /* 
        public function actualizarRegistro($id, $data)
    {
        $cancelarRegistro = $this->db->table($this->tableParticipantes)
            ->where('Id', $id);
        return $cancelarRegistro->update($data);
    }
    */
}
