<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateI10VIDTable
 */
class CreateI10VIDTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('I10_VID', function (Blueprint $table) {
            $table->integer('count', true);
            $table->string('id', 36)->unique();
            $table->timestamps();
            $table->softDeletes();
            $table->string('I10_KODAS_VD', 12)->nullable()->comment('Operacijos numeris');
            $table->integer('I10_EIL_NR')->nullable()->comment('Detalios eilutės numeris');
            $table->string('I10_KODAS_TR', 12)->nullable()->comment('Transporto operacijos numeris');
            $table->integer('I10_TIPAS')->nullable()->comment('Eilutės tipas:1-prekė');
            $table->integer('I10_PERKELTA')->nullable()->comment('Perkėlimas:1-neperkelta,2-perkelta,3-perkelta pirma dalis');
            $table->string('I10_KODAS_PS', 12)->nullable()->comment('Prekės kodas');
            $table->string('I10_KODAS_OS1', 12)->nullable()->comment('Padalinio siuntėjo prekės objekto kodas');
            $table->string('I10_SERIJA1', 12)->nullable()->comment('Padalinio siuntėjo prekės serija');
            $table->string('I10_KODAS_OS2', 12)->nullable()->comment('Padalinio gavėjo prekės objekto kodas');
            $table->string('I10_SERIJA2', 12)->nullable()->comment('Padalinio gavėjo prekės serijos');
            $table->string('I10_PAV', 40)->nullable()->comment('Prekės pavadinimas');
            $table->string('I10_KODAS_US1', 12)->nullable()->comment('Perduodamas matavimo kodas');
            $table->integer('I10_KIEKIS1')->nullable()->comment('Perduodamas kiekis');
            $table->integer('I10_FRAKCIJA1')->nullable();
            $table->string('I10_KODAS_US', 12)->nullable()->comment('Pagrindinio matavimo vieneto kodas');
            $table->integer('I10_KIEKIS')->nullable()->comment('Kiekis pagrindiniu matu');
            $table->integer('I10_FRAKCIJA')->nullable()->comment('Pagrindinio matavimo frakcija');
            $table->string('I10_KODAS_US2', 12)->nullable()->comment('Gavimo matavimo kodas');
            $table->integer('I10_KIEKIS2')->nullable()->comment('Gaunamas kiekis');
            $table->integer('I10_FRAKCIJA2')->nullable()->comment('Gavimo matavimo vieneto frakcija');
            $table->float('I10_PIR_KAINA', 12, 4)->nullable()->comment('Pirkimo kaina');
            $table->float('I10_PARD_KAINA1', 12, 4)->nullable()->comment('Siuntėjo pardavimo kaina');
            $table->float('I10_PARD_KAINA2', 12, 4)->nullable()->comment('Gavėjo pardavimo kaina');
            $table->float('I10_KITOS', 12)->nullable()->comment('Kitos išlaidos');
            $table->float('I10_MUITAS', 12)->nullable()->comment('Muitas');
            $table->float('I10_AKCIZAS', 12)->nullable()->comment('Akcizas');
            $table->float('I10_SAV_VISO', 12)->nullable()->comment('Prekės savikaina');
            $table->dateTime('I10_GAL_DATA')->nullable()->comment('Galiojimo data');
            $table->string('I10_USERIS', 12)->nullable()->comment('Kas koregavo');
            $table->dateTime('I10_R_DATE')->nullable()->comment('Koregavimo laikas');
            $table->string('I10_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
            $table->dateTime('I10_ADD_DATE')->nullable()->comment('Kada sukūrė');
            $table->float('I10_KIEKIS_A', 12, 4)->nullable()->comment('Dešimtainis kiekis  (papildomas tagas)');
            $table->string('I10_BAR_KODAS', 12)->nullable()->comment('Bar kodas   (papildomas tagas)');
            $table->string('I10_APRASYMAS1', 150)->nullable()->comment('Aprašymo laukas 1');
            $table->string('I10_APRASYMAS2', 150)->nullable()->comment('Aprašymo laukas 2');
            $table->string('I10_APRASYMAS3', 150)->nullable()->comment('Aprašymo laukas 3');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('I10_VID');
    }

}
