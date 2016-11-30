<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Gender;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
              'name' => 'Thriller',
              'slug' => 'thriller',
              'description' => 'El thriller intenta generar miedo en el receptor
                y conmoverlo a partir de sucesos inesperados',
              'color' => '#333399'
            ],
            [
              'name' => 'Ciencia Ficción',
              'slug' => 'ciencia-ficcion',
              'description' => 'Es un género narrativo que sitúa la acción en
                unas coordenadas espacio-temporales imaginarias y
                diferentes a las nuestras',
              'color' => '#339933'
            ]
        );

        Gender::insert($data);
    }
}
