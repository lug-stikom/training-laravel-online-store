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

        DB::table('employees')->insert([
            [
                'nik' => 'N-0002',
                'nama' => 'Naruto',
                'email' => 'naruto@naruto.com',
                'tanggal_lahir' => Carbon::now()->setDate(1990, 2, 20),
                'gaji_pokok' => 5000000,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'nik' => 'N-0003',
                'nama' => 'Goku',
                'email' => 'goku@goku.com',
                'tanggal_lahir' => Carbon::now()->setDate(1995, 3, 10),
                'gaji_pokok' => 75000000,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]
        ]);
    }
}
