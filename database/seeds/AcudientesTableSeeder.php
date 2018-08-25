<?php

use Illuminate\Database\Seeder;

class AcudientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Acudiente::class,200)->create();
    }
}
