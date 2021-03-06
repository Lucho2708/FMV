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
        $this->call(UsersTableSeeder::class);
        $this->call(UbicacionesTableSeeder::class);
        $this->call(EpsTableSeeder::class);
        $this->call(AcudientesTableSeeder::class);
        $this->call(PacientesTableSeeder::class);
    }
}