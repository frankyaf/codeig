<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitialData extends Seeder
{
    public function run()
    {
        
        $data =[
            [
                'title' => 'Programación estructurada',
                'keywords' => 'Programación, Informatica, Tecnología',
                'area' => '02',
                'type' => '2053',
                'img_p' => 'compuPrueba.jpg',
                'thumbnail' => 'thumb1.jpg',
                'description' => 'La programación estructurada es un paradigma de programación orientado a mejorar la claridad, calidad y tiempo de desarrollo de un programa utilizando únicamente subrutinas o funciones y tres estructuras: secuencial, condicional y repetitiva.',
                'date' => date('2024-05-13'),
                'update_at' => NULL,
            ]
        ];

        $this ->db->table('content')->insertBatch($data);
    }
}
