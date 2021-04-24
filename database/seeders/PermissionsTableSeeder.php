<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 23,
                'title' => 'user_type_create',
            ],
            [
                'id'    => 24,
                'title' => 'user_type_edit',
            ],
            [
                'id'    => 25,
                'title' => 'user_type_show',
            ],
            [
                'id'    => 26,
                'title' => 'user_type_delete',
            ],
            [
                'id'    => 27,
                'title' => 'user_type_access',
            ],
            [
                'id'    => 28,
                'title' => 'all_student_create',
            ],
            [
                'id'    => 29,
                'title' => 'all_student_edit',
            ],
            [
                'id'    => 30,
                'title' => 'all_student_show',
            ],
            [
                'id'    => 31,
                'title' => 'all_student_delete',
            ],
            [
                'id'    => 32,
                'title' => 'all_student_access',
            ],
            [
                'id'    => 33,
                'title' => 'all_parent_create',
            ],
            [
                'id'    => 34,
                'title' => 'all_parent_edit',
            ],
            [
                'id'    => 35,
                'title' => 'all_parent_show',
            ],
            [
                'id'    => 36,
                'title' => 'all_parent_delete',
            ],
            [
                'id'    => 37,
                'title' => 'all_parent_access',
            ],
            [
                'id'    => 38,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 39,
                'title' => 'only_admin',
            ],
            [
                'id'    => 40,
                'title' => 'all_student_approve',
            ],
        ];

        Permission::insert($permissions);
    }
}
