<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('members')->insert([
            [
                'name' => 'Ali',
                'email' => 'ali@mail.com',
                'phone' => '081234567'
            ],
            [
                'name' => 'Budi',
                'email' => 'budi@mail.com',
                'phone' => '081987654'
            ],
        ]);
        //
    }
}
