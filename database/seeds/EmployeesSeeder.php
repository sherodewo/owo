<?php

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nik' => '646545765',
            'name' => 'shero',
            'email' => 'sherodewo25@gmail.com',
        ]);
    }
}
