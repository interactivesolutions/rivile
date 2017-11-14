<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateN13AKCTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('N13_AKC', function(Blueprint $table) {
            $table->integer('count', true);
            $table->string('id', 36)->unique('ID_UNIQUE');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('deleted_at')->nullable();
            $table->string('N13_KODAS_PS', 12)->nullable()->comment('Prekės kodas');
            $table->string('N13_KODAS_US', 12)->nullable()->comment('Mat.vnt.');
            $table->string('N13_KODAS_IS', 12)->nullable()->comment('Padalinys');
            $table->integer('N13_EIL_NR')->nullable()->comment('Eilutės nr.');
            $table->dateTime('N13_DATE_PR')->nullable()->comment('Pradžios data');
            $table->dateTime('N13_DATE_PB')->nullable()->comment('Pabaigos data');
            $table->string('N13_PAV', 60)->nullable()->comment('Aprašymas');
            $table->boolean('N13_POZ_KAINA')->nullable()->comment('Kainos parinkimas: 0-ne; 1-taip');
            $table->float('N13_KAINA1', 12, 4)->nullable()->comment('Kaina1');
            $table->integer('N13_KIEKIS2K')->nullable()->comment('Kainos kiekis2');
            $table->float('N13_KAINA2', 12, 4)->nullable()->comment('Kaina2');
            $table->integer('N13_KIEKIS3K')->nullable()->comment('Kainos kiekis3');
            $table->float('N13_KAINA3', 12, 4)->nullable()->comment('Kaina3');
            $table->integer('N13_KIEKIS4K')->nullable()->comment('Kainos kiekis4');
            $table->float('N13_KAINA4', 12, 4)->nullable()->comment('Kaina4');
            $table->boolean('N13_POZ_NUOLAIDA')->nullable()->comment('Nuolaidos parinkimas: 0-ne; 1-taip.');
            $table->float('N13_NUOLAIDA1', 6)->nullable()->comment('Nuolaida1');
            $table->integer('N13_KIEKIS2N')->nullable()->comment('Nuolaidos kiekis2');
            $table->float('N13_NUOLAIDA2', 6)->nullable()->comment('Nuolaida2');
            $table->integer('N13_KIEKIS3N')->nullable()->comment('Nuolaidos kiekis3');
            $table->float('N13_NUOLAIDA3', 6)->nullable()->comment('Nuolaida3');
            $table->integer('N13_KIEKIS4N')->nullable()->comment('Nuolaidos kiekis4');
            $table->float('N13_NUOLAIDA4', 6)->nullable()->comment('Nuolaida4');
            $table->string('N13_KODAS_LS_1', 12)->nullable()->comment('Logistika 1');
            $table->string('N13_KODAS_LS_2', 12)->nullable()->comment('Logistika 2');
            $table->string('N13_KODAS_LS_3', 12)->nullable()->comment('Logistika 3');
            $table->string('N13_KODAS_LS_4', 12)->nullable()->comment('Logistika 4');
            $table->string('N13_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
            $table->string('N13_USERIS', 12)->nullable()->comment('Kas koregavo');
            $table->dateTime('N13_R_DATE')->nullable()->comment('Kada koregavo');
            $table->string('N13_REZERVAS', 12)->nullable()->comment('Rezervas');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('N13_AKC');
    }

}
