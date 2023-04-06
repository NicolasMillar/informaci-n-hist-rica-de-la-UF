<?php 

namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;

class HistorialUfSeed extends Seeder{

    public function run(){
        
        $json = file_get_contents(APPPATH . '\Helpers\ufhistorico.json');
        $data = json_decode($json, true);
        $filteredData = array();
        //alamacena solamente los valores de la UF
        foreach ($data as $element) {
            if ($element['codigoIndicador'] == 'UF') {
                $filteredData[] = $element;
            }
        }
        

        $this->db->table('historialuf')->insertBatch($filteredData);
    }
}
