<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $user = [
            [
                'id' => '1', 'first_name' => 'Nymul Islam','last_name' => 'Moon','email' => 'towkir1997islam@gmail.com', 'phone' => '01786287789', 'gender' => 1, 'status' => 1, 'is_admin' => 1, 'password' => Hash::make('admin@123'), 'address' => 'Kaderabad housing, Dhaka',
            ],
            [
                'id' => '2', 'first_name' => 'Md.','last_name' => 'Mehedi Islam','email' => 'mehediislamhridoy6@gmail.com', 'phone' => '01681970011', 'gender' => 1, 'status' => 1, 'is_admin' => 1, 'password' => Hash::make('admin@123'), 'address' => 'Dhaka',
            ],
            [
                'id' => '3', 'first_name' => 'Munnu Jan','last_name' => 'Khanam','email' => 'munnujan1999@gmail.com', 'phone' => '01306537967', 'gender' => 1, 'status' => 1, 'is_admin' => 1, 'password' => Hash::make('admin@123'), 'address' => 'Dhaka',
            ]
        ];

        foreach ($user as $user) {
            User::create($user);
        }
    }
}
