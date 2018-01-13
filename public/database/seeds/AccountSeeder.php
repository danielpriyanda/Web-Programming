<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nim' => '1901509060',
            'name' => 'mahasiswa tua',
            'email' => 'mahasiswa.tua@mail.com',
            'password' => bcrypt('mahasiswa'),
            'binusian' => '2019',
            'picture'  => 'user.png',
            'address' => 'Jalan Menuju ke binus',
        ]);


        DB::table('dosens')->insert([
            'nip' => 'D10000',
            'name' => 'Dosen tua',
            'email' => 'dosen.tua@mail.com',
            'password' => bcrypt('dosen'),
            'picture'  => 'dosen.png',
            'address' => 'Jalan Menuju ke binus',
        ]);

    }
}
