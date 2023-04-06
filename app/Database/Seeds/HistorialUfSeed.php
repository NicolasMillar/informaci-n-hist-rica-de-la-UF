<?php 

namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;

class HistorialUfSeed extends Seeder{

    public function run(){
        
        $json = file_get_contents(APPPATH . '\Helpers\ufhistorico.json');
        $data = json_decode($json, true);

        $this->db->table('historialuf')->insertBatch($data);
    }
}
