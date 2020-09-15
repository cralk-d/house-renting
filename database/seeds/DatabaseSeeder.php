<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   $this->call(IncoicesSeederTable::class);
        $this->call(AdminsSeederTable::class);
        $this->call(SeriesSeederTable::class);
        $this->call(CompanySeederTable::class);
        $this->call(PaymentSeederTable::class);
    }
}
