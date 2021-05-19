<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImtuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imtu', function (Blueprint $table) {
            $table->id();
            $table->integer('umur');
            $table->integer('min3sd');
            $table->integer('min2sd');
            $table->integer('min1sd');
            $table->integer('median');
            $table->integer('plus1sd');
            $table->integer('plus2sd');
            $table->integer('plus3sd');
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
        Schema::dropIfExists('imtu');
    }
}
