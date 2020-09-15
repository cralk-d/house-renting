<?php

use Illuminate\Database\Seeder;
use App\Invoice;
class IncoicesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoices = [
            [
                'user_id' =>1,
                'series_id' => 1,
                
                
            ],
            [
                'user_id' =>2,
                'series_id' =>1,
            ],
        ];
        Invoice::insert($invoices);
    }
}
