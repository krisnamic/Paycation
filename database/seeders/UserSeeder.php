<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(60),
            'noTelepon' => '01234567890',
            'alamat' => 'whereeveryouare',
            'tanggalLahir' => Carbon::parse('2000-1-1'),
            'foto' => 'admin.jpg',
        ]);
    }
}
