<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Diagnosa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('diagnosas', function (Blueprint $table) {
            $table->increments('id_diagnosa');
            $table->double('skor_1');
            $table->double('skor_2');
            $table->double('skor_3');
            $table->double('skor_4');
            $table->double('skor_5');
            $table->double('skor_6');
            $table->double('skor_7');
            $table->double('skor_8');
            $table->double('skor_9');
            $table->double('skor_10');
            $table->double('skor_11');
            $table->double('skor_12');
            $table->double('skor_13');
            $table->double('skor_14');
            $table->double('skor_15');
            $table->double('skor_16');
            $table->double('skor_17');
            $table->double('skor_18');
            $table->double('skor_19');
            $table->double('skor_20');
            $table->double('skor_21');
            $table->double('skor_22');
            $table->double('skor_23');
            $table->double('skor_24');
            $table->double('hasil')->nullable();
            $table->double('persentase')->nullable();
            $table->string('diagnosa')->nullable();
            $table->integer('id_user')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('diagnosas');
    }
}
