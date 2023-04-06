<?php namespace App\Models;

    use CodeIgniter\Model;

    class Data extends Model {

        public function listarDatos(){
            $Datos = $this->db->query("SELECT * from historialuf");
            return $Datos->getResult();
        }

        public function insertar($datos){
            $database = $this->db->table('historialuf');
            $database->insert($datos);
            return  $this->db->insertID();
        }

        public function obtenerDatos($data){
            $database = $this->db->table('historialuf');
            $database->where($data);
            return $database->get()->getResultArray();
        }

        public function actualizar($data, $id){
            $database = $this->db->table('historialuf');
            $database->set($data);
            $database->where('id',$id);
            return $database->update();
        }

        public function eliminar($data){
            $database = $this->db->table('historialuf');
            $database->where($data);
            return $database->delete();
        }
    }