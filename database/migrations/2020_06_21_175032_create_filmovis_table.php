<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmovisTable extends Migration
{
    /**
     * Run the migrations.
     *CREATE TABLE `filmovi` (
	`filmovi_id` SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
	`naslov` VARCHAR(150) NOT NULL COLLATE 'utf8mb4_general_ci',
	`zanr_id` TINYINT(3) UNSIGNED NOT NULL,
	`godina` YEAR NOT NULL,
	`trajanje` SMALLINT(5) UNSIGNED NOT NULL,
	`slika` BLOB NULL,
	`last_update` TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	PRIMARY KEY (`filmovi_id`) USING BTREE,
	INDEX `idx_naslov` (`naslov`) USING BTREE,
	INDEX `idx_zanr` (`zanr_id`) USING BTREE
)
     * 
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('filmovis', function (Blueprint $table) {
            $table->smallIncrements('filmovi_id');
            $table->string("naslov",150)->index('idx_naslov');
            $table->tinyInteger("zanr_id")->index('idx_zanr')->unsigned();
            $table->year("godina");
            $table->smallInteger('trajanje')->unsigned();
            $table->binary('slika')->nullable();
            $table->timestamp('last_update')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmovis');
    }
}
