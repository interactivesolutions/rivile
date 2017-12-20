<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateI04ATHTable
 */
class CreateI04ATHTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('I04_ATH', function (Blueprint $table) {
            $table->integer('count', true);
            $table->string('id', 36)->unique();
            $table->timestamps();
            $table->softDeletes();
            $table->string('I04_KODAS_CH', 12)->nullable()->comment('Operacijos numeris');
            $table->string('I04_DOK_NR', 20)->nullable()->comment('Dokumento numeris');
            $table->integer('I04_OP_RUSIS')->nullable()->comment('Rūšis:1-įplaukos,2-išmokos');
            $table->boolean('I04_OP_TIPAS')->nullable()->comment('Reikalavimo požymis:0-ne,1-taip');
            $table->integer('I04_OP_STORNO')->nullable()->comment('Rezervas');
            $table->dateTime('I04_OP_DATA')->nullable()->comment('Operacijos data');
            $table->string('I04_KODAS_SS', 12)->nullable()->comment('Sąskaitos kodas');
            $table->integer('I04_MOKETOJAS')->nullable()->comment('Sudengimo tipas:1-dokumentai,2-sąskaitos');
            $table->string('I04_KODAS_KS', 12)->nullable()->comment('Kliento kodas');
            $table->string('I04_PAV', 40)->nullable()->comment('Kliento pavadinimas');
            $table->string('I04_ADR', 40)->nullable()->comment('Kliento adresas');
            $table->string('I04_ATSTOVAS', 40)->nullable()->comment('Atstovas');
            $table->string('I04_KODAS_VS', 12)->nullable()->comment('Vietovės kodas');
            $table->float('I04_SUMA', 12)->nullable()->comment('Operacijos suma');
            $table->float('I04_SUMA_DSK', 12)->nullable()->comment('Diskonto suma');
            $table->float('I04_SUMA_PLK', 12)->nullable()->comment('Palūkanų suma');
            $table->string('I04_PASTABOS', 12)->nullable()->comment('Pastabos');
            $table->integer('I04_PERKELTA')->nullable()->comment('Perkėlimo požymis:1-neperkelta,2-perkelta,3-koreguota');
            $table->integer('I04_IMP_EXP')->nullable()->comment('Rezervas');
            $table->string('I04_KODAS_VL', 12)->nullable()->comment('Valiutos kodas');
            $table->float('I04_SUMA_VAL', 18)->nullable()->comment('Valiutos suma');
            $table->float('I04_KOEF', 20, 15)->nullable()->comment('Valiutos kursas');
            $table->string('I04_USERIS', 12)->nullable()->comment('Kas koregavo');
            $table->dateTime('I04_R_DATE')->nullable()->comment('Kada koregavo');
            $table->string('I04_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
            $table->string('I04_KODAS_SM', 12)->nullable()->comment('Asmuo');
            $table->string('I04_APRASYMAS', 60)->nullable()->comment('Aprašymas');
            $table->float('I04_SUMA_PER', 12)->nullable()->comment('Valiutos perskaičiavimo suma');
            $table->float('I04_SUMA_WK', 12)->nullable()->comment('WB įsipareigojimų suma');
            $table->string('I04_KODAS_LS_1', 12)->nullable()->comment('Logistika 1');
            $table->string('I04_KODAS_LS_2', 12)->nullable()->comment('Logistika 2');
            $table->string('I04_KODAS_LS_3', 12)->nullable()->comment('Logistika 3');
            $table->string('I04_KODAS_LS_4', 12)->nullable()->comment('Logistika 4');
            $table->string('I04_KODAS_ZN', 12)->nullable()->comment('Zona');
            $table->integer('I04_BUSENA')->nullable()->comment('Būsena');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('I04_ATH');
    }

}
