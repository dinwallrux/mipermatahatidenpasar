<?php

use Illuminate\Database\Seeder;

class TenagaPendidikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\TenagaPendidik::class, 5)->create();
    }
}
