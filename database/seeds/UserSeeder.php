<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'Bobby',
            'email' => 'bobby@valyouxmusic.com',
            'password' => '$2y$10$.DmuYKLbE5kaie6BKUx6Serqf.7L0VTqPwKKYOo6FZ.nBN.JUAr7m',
            'dob' => '1995-11-02',
            'avatar' => '/images/bobbyk9.svg',
        ]);
        User::findOrFail(1)->roles()->sync(1);
    }
}
