<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2022-09-20 08:15:20',
                'updated_at' => '2022-09-20 08:15:20',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2022-09-20 08:15:20',
                'updated_at' => '2022-09-20 08:15:20',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2022-09-20 08:15:20',
                'updated_at' => '2022-09-20 08:15:20',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
