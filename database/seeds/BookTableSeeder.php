<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Book;

class BookTableSeeder extends Seeder
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
          'title' => 'El Resplandor',
          'slug' => 'el-resplandor',
          'description' => 'Al escritor Jack Torrance le es ofrecido un empleo
            como cuidador del hotel Overlook durante el invierno junto a su familia.
            Este trabajo parece ser una oportunidad perfecta para demostrar
            que está totalmente curado de su alcoholismo.',
          'extract' =>'Al escritor Jack Torrance le es ofrecido un empleo
            como cuidador del hotel',
          'price' => 300.00,
          'image' => 'https://www.gandhi.com.mx/media/catalog/product/cache/1/image/370x/9df78eab33525d08d6e5fb8d27136e95/i/m/image_1165_1_67707.jpg',
          'publicdate' => new DateTime,
          'author_id' => 1,
          'editorial_id' => 2,
          'gender_id' => 1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
        ],
        [
          'title' => 'Storm Island',
          'slug' => 'storm-island',
          'description' => 'Operación Fortaleza fue una operación de
            contraespionaje llevada a cabo por los aliados en la
            Segunda Guerra Mundial.',
          'extract' =>'Operación Fortaleza fue una operación de
            contraespionaje llevada',
          'price' => 250.00,
          'image' => 'http://kbimages1-a.akamaihd.net/Images/7ef10c49-4b04-4bb7-a943-ba4d49fc9e28/300/300/False/image.jpg',
          'publicdate' => new DateTime,
          'author_id' => 2,
          'editorial_id' => 2,
          'gender_id' => 1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
        ],
        [
          'title' => 'The Key to Rebeca',
          'slug' => 'the-key-to-rebeca',
          'description' => 'La novela comienza con una cita atribuida al
            mariscal de campo alemán Erwin Rommel, en la que alaba la labor
            de su espía infiltrado en El Cairo, John Eppler.',
          'extract' =>'La novela comienza con una cita atribuida al
            mariscal de campo alemán Erwin Rommel',
          'price' => 275.00,
          'image' => 'http://kbimages1-a.akamaihd.net/Images/c21c5553-ee6c-404e-83c9-a783b41ca64c/300/300/False/image.jpg',
          'publicdate' => new DateTime,
          'author_id' => 2,
          'editorial_id' => 1,
          'gender_id' => 1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
        ],
        [
          'title' => 'The Doors of Perception',
          'slug' => 'the-doors-of-perception',
          'description' => 'Si las puertas de la percepción se
          purificaran todo se le aparecería al hombre como es, infinito.',
          'extract' =>'Si las puertas de la percepción se purificaran todo se
          le aparecería al hombre como es, infinito.',
          'price' => 150.00,
          'image' => 'https://www.gandhi.com.mx/media/catalog/product/cache/1/image/370x/9df78eab33525d08d6e5fb8d27136e95/i/m/image_1165_1_164362.jpg',
          'publicdate' => new DateTime,
          'author_id' => 3,
          'editorial_id' => 1,
          'gender_id' => 2,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
        ]
      );

      Book::insert($data);

    }
}
