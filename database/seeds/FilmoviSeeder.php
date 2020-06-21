<?php

use Illuminate\Database\Seeder;

class FilmoviSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filmovi = array(
	array(
		"filmovi_id" => 1,
		"naslov" => "ANTITRUST",
		"zanr_id" => 1,
		"godina" => "2001",
		"trajanje" => 144,
		"slika" => "NULL",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 2,
		"naslov" => "FIREWALL",
		"zanr_id" => 1,
		"godina" => "2006",
		"trajanje" => 133,
		"slika" => "NULL",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 3,
		"naslov" => "HACKERS",
		"zanr_id" => 9,
		"godina" => "1995",
		"trajanje" => 105,
		"slika" => "NULL",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 4,
		"naslov" => "SWORD FISH",
		"zanr_id" => 13,
		"godina" => "2001",
		"trajanje" => 99,
		"slika" => "NULL",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 5,
		"naslov" => "TRACK DOWN",
		"zanr_id" => 10,
		"godina" => "2000",
		"trajanje" => 92,
		"slika" => "NULL",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 6,
		"naslov" => "PIRATES of SILICON VALLEY",
		"zanr_id" => 5,
		"godina" => "1999",
		"trajanje" => 95,
		"slika" => "NULL",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 7,
		"naslov" => "THE SOCIAL NETWORK",
		"zanr_id" => 5,
		"godina" => "2010",
		"trajanje" => 151,
		"slika" => "NULL",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 8,
		"naslov" => "TRON",
		"zanr_id" => 14,
		"godina" => "1982",
		"trajanje" => 92,
		"slika" => "NULL",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 9,
		"naslov" => "TRON LEGACY",
		"zanr_id" => 14,
		"godina" => "2010",
		"trajanje" => 125,
		"slika" => "NULL",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 10,
		"naslov" => "WARGAMES",
		"zanr_id" => 1,
		"godina" => "1983",
		"trajanje" => 114,
		"slika" => "NULL",
		"last_update" => "2020-06-15 16:20:05",
	),
);

        DB::table('filmovis')->delete();
        DB::table('filmovis')->insert($filmovi);
    }
}
