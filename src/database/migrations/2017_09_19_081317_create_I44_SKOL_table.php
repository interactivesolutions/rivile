<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateI44SKOLTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('I44_SKOL', function(Blueprint $table) {
            $table->integer('count', true);
            $table->string('id', 36)->unique('ID_UNIQUE');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('deleted_at')->nullable();
            $table->string('I44_MODUL', 2)->nullable()->comment('Modulis');
            $table->string('I44_KODAS_OP', 12)->nullable()->comment('Operacijos numeris');
            $table->integer('I44_EIL_NR')->nullable()->comment('Eilutės numeris operacijoje');
            $table->integer('I44_TIPAS')->nullable()->comment('Tipas 1-Važtaraštis, 2-Grąžinimas,3-Mokėjimas,4-Diskontai,5-Debetai,6-Kreditai,7-delspinigiai,8-9-Palūkanos,10-Sudengimas,11-Reikalavimas');
            $table->string('I44_DOK_NR', 20)->nullable()->comment('Dokumento numeris');
            $table->string('I44_KODAS_KS', 12)->nullable()->comment('Kliento kodas');
            $table->string('I44_KODAS_MS', 12)->nullable()->comment('Menedžerio kodas');
            $table->string('I44_KODAS_IS', 12)->nullable()->comment('Padalinio kodas');
            $table->string('I44_KODAS_OS', 12)->nullable()->comment('Objekto kodas');
            $table->string('I44_KODAS_OS_C', 12)->nullable()->comment('Centro kodas');
            $table->string('I44_KODAS_SS', 12)->nullable()->comment('Kliento skolos sąskaita');
            $table->dateTime('I44_DATA_DOK')->nullable()->comment('Dokumento data');
            $table->dateTime('I44_DATA_MOK')->nullable()->comment('Mokėjimo data');
            $table->dateTime('I44_DATA_DSK')->nullable()->comment('Diskonto data');
            $table->float('I44_DSK_PROC', 6)->nullable()->comment('Diskonto procentas');
            $table->float('I44_SUMA_DB', 12)->nullable()->comment('Suma debete');
            $table->float('I44_SUMA_CR', 12)->nullable()->comment('Suma kredite');
            $table->string('I44_KODAS_VL', 12)->nullable()->comment('Valiutos kodas');
            $table->float('I44_SUMA_DB_VL', 18)->nullable()->comment('Valiutos debetas');
            $table->float('I44_SUMA_CR_VL', 18)->nullable()->comment('Palūkanų suma');
            $table->float('I44_SUMA_PLK', 12)->nullable()->comment('Palūkanų suma');
            $table->float('I44_SAVIKAINA', 12)->nullable()->comment('Savikaina');
            $table->float('I44_PVM', 12)->nullable()->comment('PVM suma kliento skoloje');
            $table->string('I44_PASTABOS', 12)->nullable()->comment('Trumpas komentaras');
            $table->string('I44_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
            $table->dateTime('I44_R_DATE')->nullable()->comment('Koregavimo laikas');
            $table->string('I44_USERIS', 12)->nullable()->comment('Kas koregavo');
            $table->string('I44_KODAS_KT', 12)->nullable()->comment('Sutartis');
            $table->string('I44_KODAS_K0', 12)->nullable()->comment('Sutarties priedas');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('I44_SKOL');
    }

}
