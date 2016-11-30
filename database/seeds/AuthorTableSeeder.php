<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Author;

class AuthorTableSeeder extends Seeder
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
            'name' => 'Stephen King',
            'slug' => 'stephen-king',
            'nacionalidad' => 'estadounidense',
            'birthdate' => new DateTime
          ],
          [
            'name' => 'Ken Follett',
            'slug' => 'ken-follett',
            'nacionalidad' => 'britanico',
            'birthdate' => new DateTime
          ],
          [
            'name' => 'Aldous Huxley',
            'slug' => 'aldous-huxley',
            'nacionalidad' => 'britanico',
            'birthdate' => new DateTime
          ]
        );

        Author::insert($data);
    }
}
