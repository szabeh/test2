<?php

use App\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [[
            'id'         => '1',
            'name'       => 'Lead',
            'created_at' => '2019-07-20 19:22:32',
            'updated_at' => '2019-07-20 19:22:32',
        ],
            [
                'id'         => '2',
                'name'       => 'Customer',
                'created_at' => '2019-07-20 19:22:32',
                'updated_at' => '2019-07-20 19:22:32',
            ],
            [
                'id'         => '3',
                'name'       => 'Partner',
                'created_at' => '2019-07-20 19:22:32',
                'updated_at' => '2019-07-20 19:22:32',
            ]];

        CrmStatus::insert($crmStatuses);
    }
}
