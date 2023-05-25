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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->string('Stazione di partenza');
            $table->string('Stazione di arrivo');
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->string('Codice treno');
            $table->tinyInteger('Numero carrozze');
            $table->boolean('In orario');
            $table->boolean('Canecellato');
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
        Schema::dropIfExists('trains');
    }
};
