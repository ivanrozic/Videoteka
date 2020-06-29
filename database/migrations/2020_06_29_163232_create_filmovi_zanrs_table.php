<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmoviZanrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmovi_zanr', function (Blueprint $table) {
            $table->smallInteger('filmovi_id');
            $table->tinyInteger('zanr_id');
            $table->timestamp('last_update')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->primary(['filmovi_id', 'zanr_id']);
            $table->unique('filmovi_id', 'uniquefilm');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmovi_zanr');
    }
}
