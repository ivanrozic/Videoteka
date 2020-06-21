<?php

use Illuminate\Database\Seeder;

class ZanrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zanr = array(
	array(
		"zanr_id" => 1,
		"naziv" => "Akcija, avantura",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 2,
		"naziv" => "Animirani",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 3,
		"naziv" => "Dječji",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 4,
		"naziv" => "Dokumentarni",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 5,
		"naziv" => "Drama",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 6,
		"naziv" => "Glazbeni",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 7,
		"naziv" => "Horor",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 8,
		"naziv" => "Klasici",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 9,
		"naziv" => "Komedija",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 10,
		"naziv" => "Kriminalistički",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 11,
		"naziv" => "Novi",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 12,
		"naziv" => "Obiteljski",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 13,
		"naziv" => "Triler",
		"last_update" => "2020-06-15 15:10:05",
	),
	array(
		"zanr_id" => 14,
		"naziv" => "Znanstveno-fantastični",
		"last_update" => "2020-06-15 15:10:05",
	),
);

        DB::table('zanrs')->delete();
        DB::table('zanrs')->insert($zanr);
    }
}
