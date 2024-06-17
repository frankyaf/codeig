<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarDescription extends Migration
{
    public function up()
    {
        $campos = [
          'description' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'after' => 'thumbnail',
                'null' => false
          ],
        ];

        $this->forge->addColumn('content',$campos);
    }

    public function down()
    {
        $this->forge->dropColumn('content','description');
    }
}
