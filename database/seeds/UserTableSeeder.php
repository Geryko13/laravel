<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array(
          [
            'name' => 'Marimo',
            'last_name' => 'Books',
            'email' => 'pako_685@live.com.mx',
            'username' => 'MarimoBooks',
            'password' => \Hash::make('marimo'),
            'type' => 'admin',
            'address' => 'San Pedro el Alto #121',
            'bank_account' => '12345678',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
          ],
          [
            'name' => 'Ismael',
            'last_name' => 'Ruiz',
            'email' => 'ismael_rmtz@outlook.com',
            'username' => 'ismaelrmtz',
            'password' => \Hash::make('ismael'),
            'type' => 'user',
            'address' => 'Magisterial #119',
            'bank_account' => '87654321',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
          ],
          [
            'name' => 'Karla',
            'last_name' => 'Ríos',
            'email' => 'karla.rios.fa@hotmail.com',
            'username' => 'karlarf',
            'password' => \Hash::make('karla'),
            'type' => 'user',
            'address' => 'Río Hondo #987',
            'bank_account' => '24681022',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
          ],

        );

        User::insert($data);
    }
}
