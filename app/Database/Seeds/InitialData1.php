<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitialData1 extends Seeder
{
    public function run()
    {
        $data =[
            [
                'title' => 'Programación secuencial',
                'keywords' => 'Programación, Informatica, Tecnología',
                'area' => '03',
                'type' => '2054',
                'img_p' => 'computadoras.jpg',
                'thumbnail' => 'thumb2.jpg',
                'description' => 'También conocido como estructura secuencial, es aquella en la que una instrucción o acción sigue a otra en secuencia',
                'date' => date('2024-06-13'),
                'update_at' => NULL,
            ],
            [
                'title' => 'Programación Orientada a Objetos',
                'keywords' => 'Programación, Informatica, Tecnología',
                'area' => '04',
                'type' => '2055',
                'img_p' => 'objetos.jpg',
                'thumbnail' => 'thumb3.jpg',
                'description' => 'La programación orientada a objetos es un modelo de programación en el que el diseño de software se organiza alrededor de datos u objetos, en vez de usar funciones y lógica.',
                'date' => date('2024-06-14'),
                'update_at' => NULL,
            ],

        ];

        $this ->db->table('content')->insertBatch($data);
    }
}
