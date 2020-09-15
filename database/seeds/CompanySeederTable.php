<?php

use Illuminate\Database\Seeder;
use App\Company;
class CompanySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies =[[
            'name' => 'OHRCS Group',
            'address' => 'RWANDA KIGALI',
            'alt_address' => 'KIGALI NYARUGENGE',
            'city' => 'KIGALI CITY',
            'email' => 'sales@ohrcs.com',
            'url' => 'https:www.ohrcs.com',
            
        ]];

        Company::insert($companies);
    }
}
