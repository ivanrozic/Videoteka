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
        $this->call(ZanrSeeder::class);
        $this->call(FilmoviSeeder::class);
        $this->call(ZanrFilmoviSeeder::class);
    }
}
