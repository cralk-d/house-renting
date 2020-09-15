<?php

use Illuminate\Database\Seeder;
use App\Serie;

class SeriesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $series = [
            [
                'id' =>1,
                'prefix' =>'OHRCS',

        ],
        ];
        Serie::insert($series);
    }
}
