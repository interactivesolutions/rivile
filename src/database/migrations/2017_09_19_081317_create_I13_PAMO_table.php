<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateI13PAMOTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('I13_PAMO', function(Blueprint $table) {
            $table->integer('count', true);
            $table->string('id', 36)->unique('ID_UNIQUE');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('deleted_at')->nullable();
            $table->string('I13_KODAS_PO', 12)->nullable()->comment('Operacijos numeris');
            $table->integer('I13_EIL_NR')->nullable()->comment('Eil. numeris');
            $table->string('I13_KODAS_SS', 12)->nullable()->comment('Sąskaita');
            $table->float('I13_SUMA', 12)->nullable()->comment('Suma');
            $table->float('I13_SUMA_VAL', 18)->nullable()->comment('Suma valiuta');
            $table->string('I13_PAV', 40)->nullable()->comment('Pavadinimas');
            $table->string('I13_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
            $table->string('I13_USERIS', 12)->nullable()->comment('Kas koregavo');
            $table->dateTime('I13_R_DATE')->nullable()->comment('Koregavimo data');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('I13_PAMO');
    }

}
