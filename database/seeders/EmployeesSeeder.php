<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Mixed_;

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
            [
                'fullname' => 'John Deo',
                'gender' => 'Male',
                'email' => 'john@email.com',
                'tel' => '0992212341',
                'age' => 30,
                'address' => '8/80 moo.8 bagnkok',
                'avatar' => 'noavatar.jpg',
                'status' => 1
            ],
            [
                'fullname' => 'สมชาย ใจดี',
                'gender' => 'Male',
                'email' => 'somchai@email.com',
                'tel' => '0209893912',
                'age' => 20,
                'address' => '9/99 moo.9 bagnkok',
                'avatar' => 'noavatar.jpg',
                'status' => 1
            ],
            [
                'fullname' => 'Siriwan Kongmano',
                'gender' => 'Female',
                'email' => 'siriwan@email.com',
                'tel' => '0879932922',
                'age' => 27,
                'address' => '366 chonburi',
                'avatar' => 'noavatar.jpg',
                'status' => 1
            ],
            [
                'fullname' => 'Worapon Jaidee',
                'gender' => 'Male',
                'email' => 'wrp@email.com',
                'tel' => '0899554432',
                'age' => 21,
                'address' => '22 Chiang Mai',
                'avatar' => 'noavatar.jpg',
                'status' => 1
            ]
        ]);
        // DB::table('employees')->delete($id=null);
        
    }
}
