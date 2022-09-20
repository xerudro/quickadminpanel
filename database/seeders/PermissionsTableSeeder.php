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
                'title' => 'team_create',
            ],
            [
                'id'    => 18,
                'title' => 'team_edit',
            ],
            [
                'id'    => 19,
                'title' => 'team_show',
            ],
            [
                'id'    => 20,
                'title' => 'team_delete',
            ],
            [
                'id'    => 21,
                'title' => 'team_access',
            ],
            [
                'id'    => 22,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 28,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 29,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 30,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 31,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 32,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 33,
                'title' => 'product_create',
            ],
            [
                'id'    => 34,
                'title' => 'product_edit',
            ],
            [
                'id'    => 35,
                'title' => 'product_show',
            ],
            [
                'id'    => 36,
                'title' => 'product_delete',
            ],
            [
                'id'    => 37,
                'title' => 'product_access',
            ],
            [
                'id'    => 38,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 39,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 40,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 41,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 42,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 43,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 44,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 45,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 46,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 47,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 48,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 49,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 50,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 51,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 52,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 53,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 54,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 55,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 56,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 57,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 58,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 59,
                'title' => 'admin_panel_access',
            ],
            [
                'id'    => 60,
                'title' => 'team_user_create',
            ],
            [
                'id'    => 61,
                'title' => 'team_user_edit',
            ],
            [
                'id'    => 62,
                'title' => 'team_user_show',
            ],
            [
                'id'    => 63,
                'title' => 'team_user_delete',
            ],
            [
                'id'    => 64,
                'title' => 'team_user_access',
            ],
            [
                'id'    => 65,
                'title' => 'team_role_create',
            ],
            [
                'id'    => 66,
                'title' => 'team_role_edit',
            ],
            [
                'id'    => 67,
                'title' => 'team_role_show',
            ],
            [
                'id'    => 68,
                'title' => 'team_role_delete',
            ],
            [
                'id'    => 69,
                'title' => 'team_role_access',
            ],
            [
                'id'    => 70,
                'title' => 'teams_permision_create',
            ],
            [
                'id'    => 71,
                'title' => 'teams_permision_edit',
            ],
            [
                'id'    => 72,
                'title' => 'teams_permision_show',
            ],
            [
                'id'    => 73,
                'title' => 'teams_permision_delete',
            ],
            [
                'id'    => 74,
                'title' => 'teams_permision_access',
            ],
            [
                'id'    => 75,
                'title' => 'teams_manager_access',
            ],
            [
                'id'    => 76,
                'title' => 'client_create',
            ],
            [
                'id'    => 77,
                'title' => 'client_edit',
            ],
            [
                'id'    => 78,
                'title' => 'client_show',
            ],
            [
                'id'    => 79,
                'title' => 'client_delete',
            ],
            [
                'id'    => 80,
                'title' => 'client_access',
            ],
            [
                'id'    => 81,
                'title' => 'company_create',
            ],
            [
                'id'    => 82,
                'title' => 'company_edit',
            ],
            [
                'id'    => 83,
                'title' => 'company_show',
            ],
            [
                'id'    => 84,
                'title' => 'company_delete',
            ],
            [
                'id'    => 85,
                'title' => 'company_access',
            ],
            [
                'id'    => 86,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
