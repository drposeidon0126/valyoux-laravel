<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'title'      => 'Admin',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'User',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ]
        ]);
    }
}
