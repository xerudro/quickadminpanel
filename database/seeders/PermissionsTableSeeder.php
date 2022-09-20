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
                'title' => 'company_create',
            ],
            [
                'id'    => 77,
                'title' => 'company_edit',
            ],
            [
                'id'    => 78,
                'title' => 'company_show',
            ],
            [
                'id'    => 79,
                'title' => 'company_delete',
            ],
            [
                'id'    => 80,
                'title' => 'company_access',
            ],
            [
                'id'    => 81,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 82,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 83,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 84,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 85,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 86,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 87,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 88,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 89,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 90,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 91,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 92,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 93,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 94,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 95,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 96,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 97,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 98,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 99,
                'title' => 'task_create',
            ],
            [
                'id'    => 100,
                'title' => 'task_edit',
            ],
            [
                'id'    => 101,
                'title' => 'task_show',
            ],
            [
                'id'    => 102,
                'title' => 'task_delete',
            ],
            [
                'id'    => 103,
                'title' => 'task_access',
            ],
            [
                'id'    => 104,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 105,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 106,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 107,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 108,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 109,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 110,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 111,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 112,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 113,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 114,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 115,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 116,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 117,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 118,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 119,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 120,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 121,
                'title' => 'asset_create',
            ],
            [
                'id'    => 122,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 123,
                'title' => 'asset_show',
            ],
            [
                'id'    => 124,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 125,
                'title' => 'asset_access',
            ],
            [
                'id'    => 126,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 127,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 128,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 129,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 130,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 131,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 132,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 133,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 134,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 135,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 136,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 137,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 138,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 139,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 140,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 141,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 142,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 143,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 144,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 145,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 146,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 147,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 148,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 149,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 150,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 151,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 152,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 153,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 154,
                'title' => 'expense_create',
            ],
            [
                'id'    => 155,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 156,
                'title' => 'expense_show',
            ],
            [
                'id'    => 157,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 158,
                'title' => 'expense_access',
            ],
            [
                'id'    => 159,
                'title' => 'income_create',
            ],
            [
                'id'    => 160,
                'title' => 'income_edit',
            ],
            [
                'id'    => 161,
                'title' => 'income_show',
            ],
            [
                'id'    => 162,
                'title' => 'income_delete',
            ],
            [
                'id'    => 163,
                'title' => 'income_access',
            ],
            [
                'id'    => 164,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 165,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 166,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 167,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 168,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 169,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 170,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 171,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 172,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 173,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 174,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 175,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 176,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 177,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 178,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 179,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 180,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 181,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 182,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 183,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 184,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 185,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 186,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 187,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 188,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 189,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 190,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 191,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 192,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 193,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 194,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 195,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 196,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 197,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 198,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 199,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 200,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 201,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 202,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 203,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 204,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 205,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 206,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 207,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 208,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 209,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 210,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 211,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 212,
                'title' => 'course_create',
            ],
            [
                'id'    => 213,
                'title' => 'course_edit',
            ],
            [
                'id'    => 214,
                'title' => 'course_show',
            ],
            [
                'id'    => 215,
                'title' => 'course_delete',
            ],
            [
                'id'    => 216,
                'title' => 'course_access',
            ],
            [
                'id'    => 217,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 218,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 219,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 220,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 221,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 222,
                'title' => 'test_create',
            ],
            [
                'id'    => 223,
                'title' => 'test_edit',
            ],
            [
                'id'    => 224,
                'title' => 'test_show',
            ],
            [
                'id'    => 225,
                'title' => 'test_delete',
            ],
            [
                'id'    => 226,
                'title' => 'test_access',
            ],
            [
                'id'    => 227,
                'title' => 'question_create',
            ],
            [
                'id'    => 228,
                'title' => 'question_edit',
            ],
            [
                'id'    => 229,
                'title' => 'question_show',
            ],
            [
                'id'    => 230,
                'title' => 'question_delete',
            ],
            [
                'id'    => 231,
                'title' => 'question_access',
            ],
            [
                'id'    => 232,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 233,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 234,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 235,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 236,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 237,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 238,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 239,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 240,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 241,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 242,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 243,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 244,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 245,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 246,
                'title' => 'test_answer_access',
            ],
            [
                'id'    => 247,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 248,
                'title' => 'currency_create',
            ],
            [
                'id'    => 249,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 250,
                'title' => 'currency_show',
            ],
            [
                'id'    => 251,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 252,
                'title' => 'currency_access',
            ],
            [
                'id'    => 253,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 254,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 255,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 256,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 257,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 258,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 259,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 260,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 261,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 262,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 263,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 264,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 265,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 266,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 267,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 268,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 269,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 270,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 271,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 272,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 273,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 274,
                'title' => 'client_create',
            ],
            [
                'id'    => 275,
                'title' => 'client_edit',
            ],
            [
                'id'    => 276,
                'title' => 'client_show',
            ],
            [
                'id'    => 277,
                'title' => 'client_delete',
            ],
            [
                'id'    => 278,
                'title' => 'client_access',
            ],
            [
                'id'    => 279,
                'title' => 'project_create',
            ],
            [
                'id'    => 280,
                'title' => 'project_edit',
            ],
            [
                'id'    => 281,
                'title' => 'project_show',
            ],
            [
                'id'    => 282,
                'title' => 'project_delete',
            ],
            [
                'id'    => 283,
                'title' => 'project_access',
            ],
            [
                'id'    => 284,
                'title' => 'note_create',
            ],
            [
                'id'    => 285,
                'title' => 'note_edit',
            ],
            [
                'id'    => 286,
                'title' => 'note_show',
            ],
            [
                'id'    => 287,
                'title' => 'note_delete',
            ],
            [
                'id'    => 288,
                'title' => 'note_access',
            ],
            [
                'id'    => 289,
                'title' => 'document_create',
            ],
            [
                'id'    => 290,
                'title' => 'document_edit',
            ],
            [
                'id'    => 291,
                'title' => 'document_show',
            ],
            [
                'id'    => 292,
                'title' => 'document_delete',
            ],
            [
                'id'    => 293,
                'title' => 'document_access',
            ],
            [
                'id'    => 294,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 295,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 296,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 297,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 298,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 299,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 300,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 301,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 302,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 303,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 304,
                'title' => 'dashboard_ii_access',
            ],
            [
                'id'    => 305,
                'title' => 'accounting_dashboard_access',
            ],
            [
                'id'    => 306,
                'title' => 'client_transaction_create',
            ],
            [
                'id'    => 307,
                'title' => 'client_transaction_edit',
            ],
            [
                'id'    => 308,
                'title' => 'client_transaction_show',
            ],
            [
                'id'    => 309,
                'title' => 'client_transaction_delete',
            ],
            [
                'id'    => 310,
                'title' => 'client_transaction_access',
            ],
            [
                'id'    => 311,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
