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
		"slika" => "antitrust_2001.jpg",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 2,
		"naslov" => "FIREWALL",
		"zanr_id" => 1,
		"godina" => "2006",
		"trajanje" => 133,
		"slika" => "firewall_2006.jpg",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 3,
		"naslov" => "HACKERS",
		"zanr_id" => 9,
		"godina" => "1995",
		"trajanje" => 105,
		"slika" => "hackers_1995.jpg",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 4,
		"naslov" => "SWORD FISH",
		"zanr_id" => 13,
		"godina" => "2001",
		"trajanje" => 99,
		"slika" => "operation_swordfish_2001.jpg",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 5,
		"naslov" => "TRACK DOWN",
		"zanr_id" => 10,
		"godina" => "2000",
		"trajanje" => 92,
		"slika" => "operation_takedown_2000.jpg",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 6,
		"naslov" => "PIRATES of SILICON VALLEY",
		"zanr_id" => 5,
		"godina" => "1999",
		"trajanje" => 95,
		"slika" => "pirates_of_silicone_valley_1999.jpg",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 7,
		"naslov" => "THE SOCIAL NETWORK",
		"zanr_id" => 5,
		"godina" => "2010",
		"trajanje" => 151,
		"slika" => "the_social_network_2010.jpg",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 8,
		"naslov" => "TRON",
		"zanr_id" => 14,
		"godina" => "1982",
		"trajanje" => 92,
		"slika" => "tron_1982.jpg",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 9,
		"naslov" => "TRON LEGACY",
		"zanr_id" => 14,
		"godina" => "2010",
		"trajanje" => 125,
		"slika" => "tron_legacy_2010.jpg",
		"last_update" => "2020-06-15 16:20:05",
	),
	array(
		"filmovi_id" => 10,
		"naslov" => "WARGAMES",
		"zanr_id" => 1,
		"godina" => "1983",
		"trajanje" => 114,
		"slika" => "war_games_1983.jpg",
		"last_update" => "2020-06-15 16:20:05",
	),
);

        DB::table('filmovis')->delete();
        DB::table('filmovis')->insert($filmovi);
    }
}
