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
        Schema::table('klijenti', function (Blueprint $table) {
            $table ->string('imePrezime', 35)->change();
            $table ->string('grad', 20)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('klijenti', function (Blueprint $table) {
            $table ->string('imePrezime', 30)->change();
            $table ->string('grad', 25)->change();
        });
    }
};
