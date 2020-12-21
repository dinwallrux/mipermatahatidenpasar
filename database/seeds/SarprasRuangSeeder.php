<?php

use Illuminate\Database\Seeder;

class SarprasRuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\SarprasRuang::class, 5)->create();
    }
}
