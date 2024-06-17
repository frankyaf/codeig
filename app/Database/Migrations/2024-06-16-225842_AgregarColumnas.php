<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarColumnas extends Migration
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
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'keywords' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'area' => [
                'type'=> 'TEXT',
                'null'=> false,
            ],
            'type' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'img_p' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'thumbnail' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'date' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'update_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('content');
    }

    public function down()
    {
        $this->forge->dropTable('content');
    }
}
