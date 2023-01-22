<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervacije', function (Blueprint $table) {
            $table->id();
            $table->integer('iznos');
            $table->string('nacinPlacanja');
            $table->foreignId('klijent_id')->constrained('klijenti');
            $table->foreignId('brod_id')->constrained('brodovi');
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
        Schema::dropIfExists('rezervacije');
    }
};
