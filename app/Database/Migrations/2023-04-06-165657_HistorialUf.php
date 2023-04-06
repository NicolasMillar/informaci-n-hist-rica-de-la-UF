<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HistorialUf extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombreIndicador' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'codigoIndicador' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'unidadMedidaIndicador' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'valorIndicador' => [
                'type'       => 'INT',
                'constraint'     => 5,
            ],
            'fechaIndicador' => [
                'type'       => 'Date',
            ],
            'tiempoIndicador' => [
                'type'       => 'Date',
            ],
            'origenIndicador' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('historialuf');
    }

    public function down()
    {
        $this->forge->dropTable('historialuf');
    }
}
