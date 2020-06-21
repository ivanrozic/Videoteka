<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZanrsTable extends Migration
{
    /**
     * Run the migrations.
     *CREATE TABLE `zanr` (
	`zanr_id` TINYINT(3) UNSIGNED NOT NULL AUTO_INCREMENT,
	`naziv` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`last_update` TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	PRIMARY KEY (`zanr_id`) USING BTREE
)
     *      * 
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('zanrs', function (Blueprint $table) {
            $table->tinyInteger('zanr_id')->unsigned()->autoIncrement(); // US AI PK
            $table->char('naziv', 50)->collation('utf8mb4_general_ci');
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
        Schema::dropIfExists('zanrs');
    }
}
