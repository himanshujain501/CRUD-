<?php

use Illuminate\Database\Seeder;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\employee::class,50)->create();
    }
}
