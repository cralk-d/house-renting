<?php

use Illuminate\Database\Seeder;
use App\Payment;
class PaymentSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments =[
            [
                'user_id' => 1,
                'invoice_id' =>2,
                'payment_amount' =>10000,
                'payment_type' => 'Check',
                
            ]

        ];
        Payment::insert($payments);
    }
}
