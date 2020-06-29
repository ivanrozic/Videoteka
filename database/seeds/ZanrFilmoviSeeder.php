<?php

use Illuminate\Database\Seeder;

class ZanrFilmoviSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filmovi_zanr = array(
	array(
		"zanr_id" => 1,
		"filmovi_id" => 1,
		"last_update" => "2020-06-24 18:05:45",
	),
	array(
		"zanr_id" => 1,
		"filmovi_id" => 2,
		"last_update" => "2020-06-24 18:12:34",
	),
	array(
		"zanr_id" => 9,
		"filmovi_id" => 3,
		"last_update" => "2020-06-24 18:12:44",
	),
	array(
		"zanr_id" => 13,
		"filmovi_id" => 4,
		"last_update" => "2020-06-24 18:13:09",
	),
	array(
		"zanr_id" => 10,
		"filmovi_id" => 5,
		"last_update" => "2020-06-24 18:14:23",
	),
	array(
		"zanr_id" => 5,
		"filmovi_id" => 6,
		"last_update" => "2020-06-24 18:14:30",
	),
	array(
		"zanr_id" => 5,
		"filmovi_id" => 7,
		"last_update" => "2020-06-24 18:14:40",
	),
	array(
		"zanr_id" => 14,
		"filmovi_id" => 8,
		"last_update" => "2020-06-24 18:14:57",
	),
	array(
		"zanr_id" => 14,
		"filmovi_id" => 9,
		"last_update" => "2020-06-24 18:18:26",
	),
	array(
		"zanr_id" => 1,
		"filmovi_id" => 10,
		"last_update" => "2020-06-24 18:18:39",
	),
);
        DB::table('filmovi_zanr')->delete();
        DB::table('filmovi_zanr')->insert($filmovi_zanr);
    }
}
