<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(AuthorTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(EditorialTableSeeder::class);
        $this->call(BookTableSeeder::class);
    }
}
