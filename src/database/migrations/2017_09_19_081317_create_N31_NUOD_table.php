<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateN31NUODTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('N31_NUOD', function(Blueprint $table) {
            $table->integer('count', true);
            $table->string('id', 36)->unique('ID_UNIQUE');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('deleted_at')->nullable();
            $table->string('N31_KODAS_NS', 12)->nullable()->comment('Nuolaidos lentelės kodas');
            $table->integer('N31_EIL_NR')->nullable()->comment('Detalios eilutės numeris');
            $table->float('N31_MINIMUM', 14, 3)->nullable()->comment('Minimalus kiekis pagrindiniu matu');
            $table->float('N31_NUOL_PROC', 8, 4)->nullable()->comment('Nuolaidos procentas');
            $table->string('N31_USERIS', 12)->nullable()->comment('Kas koregavo');
            $table->dateTime('N31_R_DATE')->nullable()->comment('Kada koregavo');
            $table->string('N31_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('N31_NUOD');
    }

}
