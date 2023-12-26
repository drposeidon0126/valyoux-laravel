<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            [
                'title'      => 'user_management_access',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'permission_create',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'permission_edit',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'permission_show',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'permission_delete',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'permission_access',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'role_create',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'role_edit',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'role_show',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'role_delete',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'role_access',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'user_create',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'user_edit',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'user_show',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'user_delete',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ],
            [
                'title'      => 'user_access',
                'created_at' => '2020-11-27 07:11:07',
                'updated_at' => '2020-11-27 07:11:07',
            ]
        ]);
    }
}
