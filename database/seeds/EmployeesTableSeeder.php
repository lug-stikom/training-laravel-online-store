<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nik' => 'N-0001',
            'nama' => 'Kukuh',
            'email' => 'rkukuh@gmail.com',
            'tanggal_lahir' => Carbon::now()->setDate(1987, 1, 31),
            'gaji_pokok' => 10000000,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
