<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InsertAdvocateDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            DB::table('dw_advocate')->insert(
                [
                    'adv_first_name' => Str::random(10),
                    'adv_last_name' => Str::random(10),
                    'adv_email' => Str::random(10).'@gmail.com',
                    'adv_password' => Hash::make('password'),
                    'adv_detail_access_token' =>  Str::random(50),
                ]
            );
        }
    }
}
