<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facade\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::tabel('user')->insert([
        //     'name'=> 'Administrator',
        //     'email'=> 'admin@hotel.com',
        //     'password'=> Hash::make('admin123')
        // ]);

        User::truncate();

        $user = [
            'name'=> 'Administrator',
            'email'=> 'admin@hotel.com',
            'password'=> Hash::make('admin123')
        ];

        User::insert($user);
    }
}
