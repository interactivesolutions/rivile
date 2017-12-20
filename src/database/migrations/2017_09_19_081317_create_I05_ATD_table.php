<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateI05ATDTable
 */
class CreateI05ATDTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('I05_ATD', function (Blueprint $table) {
            $table->integer('count', true);
            $table->string('id', 36)->unique();
            $table->timestamps();
            $table->softDeletes();
            $table->string('I05_KODAS_CH', 12)->nullable()->comment('Operacijos numeris');
            $table->string('I05_EIL_NR', 6)->nullable()->comment('Eilutės numeris dokumente');
            $table->string('I05_DOK_NR', 20)->nullable()->comment('Dokumento numeris');
            $table->dateTime('I05_DATA_DOK')->nullable()->comment('Dokumento data');
            $table->dateTime('I05_DATA_MOK')->nullable()->comment('Mokėjimo data');
            $table->dateTime('I05_DATA_DSK')->nullable()->comment('Diskonto data');
            $table->string('I05_APR', 12)->nullable()->comment('Pastabos');
            $table->float('I05_SUMA', 12)->nullable()->comment('Mokėjimo suma');
            $table->float('I05_SUMA_DSK', 12)->nullable()->comment('Suteikiamas diskontas');
            $table->float('I05_SUMA_PLK', 12)->nullable()->comment('Palūkanų suma');
            $table->string('I05_KODAS_SS', 12)->nullable()->comment('Sąskaitos kodas');
            $table->string('I05_KODAS_VL', 12)->nullable()->comment('Operacijos valiutos kodas');
            $table->string('I05_KODAS_VL_S', 12)->nullable()->comment('Skolos valiutos kodas');
            $table->float('I05_SUMA_VAL_DSK', 18)->nullable()->comment('Valiutos diskontas');
            $table->float('I05_KOEF', 20, 15)->nullable()->comment('Konvertavimo koeficientas -> Bazinė valiuta');
            $table->float('I05_KOEF_S', 20, 15)->nullable()->comment('Konvertavimo koeficientas <- Bazinė valiuta');
            $table->float('I05_SUMA_VAL', 18)->nullable()->comment('Mokėjimo suma valiuta');
            $table->float('I05_SUMA_VAL_S', 18)->nullable()->comment('Sudengimo suma valiuta');
            $table->string('I05_KODAS_IS', 12)->nullable()->comment('Padalinio kodas');
            $table->string('I05_KODAS_OS', 12)->nullable()->comment('Objekto kodas');
            $table->string('I05_KODAS_OS_C', 12)->nullable()->comment('Centro kodas');
            $table->string('I05_KODAS_MS', 12)->nullable()->comment('Menedžerio kodas');
            $table->string('I05_USERIS', 12)->nullable()->comment('Kas koregavo');
            $table->dateTime('I05_R_DATE')->nullable()->comment('Kada koregavo');
            $table->string('I05_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
            $table->string('I05_KODAS_KT', 12)->nullable()->comment('Sutartis');
            $table->string('I05_KODAS_K0', 12)->nullable()->comment('Sutarties priedas');
            $table->float('I05_SUMA_PER', 12)->nullable()->comment('Valiutos perskaičiavimo suma');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('I05_ATD');
    }

}
