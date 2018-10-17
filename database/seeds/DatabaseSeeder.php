<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\Employee;

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
        $this->call(EmployeesSeeder::class);
    }
}
