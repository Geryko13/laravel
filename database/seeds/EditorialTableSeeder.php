<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Editorial;

class EditorialTableSeeder extends Seeder
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
          'name' => 'Taurus',
          'slug' => 'taurus',
          'address' => 'San Fermin #121',
          'telephone' => '8181128823'
        ],
        [
          'name' => 'Satori',
          'slug' => 'satori',
          'address' => 'Uranio #1220',
          'telephone' => '8181234567'
        ]
      );

      Editorial::insert($data);
      
    }
}
