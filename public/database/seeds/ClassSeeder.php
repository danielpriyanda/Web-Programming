<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Artificial Intellegence In Games',
            'lecture_code' => 'COMP001',
            'tahun' => '2018'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Web Programming',
            'lecture_code' => 'COMP002',
            'tahun' => '2018'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Data Mining',
            'lecture_code' => 'COMP003',
            'tahun' => '2018'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'User Experience',
            'lecture_code' => 'COMP004',
            'tahun' => '2018'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Advanced Object Oriented Programming',
            'lecture_code' => 'COMP005',
            'tahun' => '2018'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Algorithm and Program Analysis',
            'lecture_code' => 'COMP006',
            'tahun' => '2018'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Neural Network',
            'lecture_code' => 'COMP007',
            'tahun' => '2018'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Operating System',
            'lecture_code' => 'COMP008',
            'tahun' => '2018'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Compilation Technique',
            'lecture_code' => 'COMP009',
            'tahun' => '2018'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Entrepreneur II',
            'lecture_code' => 'COMP010',
            'tahun' => '2018'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Computer Vision',
            'lecture_code' => 'COMP011',
            'tahun' => '2018'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Mobile Game Application',
            'lecture_code' => 'COMP012',
            'tahun' => '2018'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Database',
            'lecture_code' => 'COMP013',
            'tahun' => '2017'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Data Structure',
            'lecture_code' => 'COMP014',
            'tahun' => '2017'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Human Computer Interaction',
            'lecture_code' => 'COMP015',
            'tahun' => '2017'
        ]);
        DB::table('lectures')->insert([
            'picture' => 'lecture.jpg',
            'lecture_name' => 'Computer Graphics',
            'lecture_code' => 'COMP016',
            'tahun' => '2017'
        ]);
    }
}
