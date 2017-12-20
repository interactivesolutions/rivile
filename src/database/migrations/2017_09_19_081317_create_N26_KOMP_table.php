<?php

declare(strict_types =1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateN26KOMPTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('N26_KOMP', function(Blueprint $table) {
            $table->integer('count', true);
            $table->string('id', 36)->unique();
            $table->timestamps();
            $table->softDeletes();
            $table->string('N26_KODAS_PS', 12)->nullable()->comment('Gaminio kodas');
            $table->integer('N26_EIL_NR')->nullable()->comment('Eilutės numeris');
            $table->integer('N26_TIPAS')->nullable()->comment('Komponentės tipas:1-prekė,2-kodas');
            $table->string('N26_KODAS_PS_K', 12)->nullable()->comment('Komponentės kodas');
            $table->string('N26_KODAS_US', 12)->nullable()->comment('Matavimo vienetas');
            $table->integer('N26_FRAKCIJA')->nullable()->comment('Matavimo vnt. frakcija');
            $table->integer('N26_KIEKIS')->nullable()->comment('Reikalingas kiekis');
            $table->integer('N26_G_KIEKIS')->nullable()->comment('Kokiam gaminio kiekiui aprašytas reikalingas kiekis');
            $table->boolean('N26_ISB_POZ')->nullable()->comment('Išbarstymo požymis:0-ne,1-taip');
            $table->float('N26_ISEIG_PROC', 6)->nullable()->comment('Sumos Išeigos procentas išbarstyme');
            $table->boolean('N26_KOMP_POZ')->nullable()->comment('Komplektavimo požymis:0-ne,1-taip');
            $table->boolean('N26_KREPS_POZ')->nullable()->comment('Krepšelio požymis:0-ne,1-taip');
            $table->boolean('N26_EKSP_POZ')->nullable()->comment('Ekspozicijos požymis:0-ne,1-taip');
            $table->string('N26_KITI_POZ', 5)->nullable()->comment('Kiti požymiai');
            $table->string('N26_USERIS', 12)->nullable()->comment('Kas koregavo');
            $table->dateTime('N26_R_DATE')->nullable()->comment('Kada koregavo');
            $table->string('N26_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
            $table->integer('N26_KOMP_SVS')->nullable()->comment('SVS požymis');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('N26_KOMP');
    }

}
