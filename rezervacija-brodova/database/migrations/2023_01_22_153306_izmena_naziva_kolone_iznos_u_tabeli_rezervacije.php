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
        Schema::table('rezervacije', function (Blueprint $table) {
            $table->renameColumn('iznos', 'cena');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rezervacije', function (Blueprint $table) {
            $table->renameColumn('cena', 'iznos');
        });
    }
};
