<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateI64LOJOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('I64_LOJO', function(Blueprint $table)
		{
			$table->integer('COUNT', true);
			$table->string('id', 36)->unique('ID_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('deleted_at')->nullable();
			$table->string('I64_KODAS_DR', 12)->nullable()->comment('Operacijos Nr.');
			$table->integer('I64_EIL_NR')->nullable()->comment('Eilutės numeris(unikalumui)');
			$table->string('I64_KODAS_DL', 12)->nullable()->comment('Lojalumo kortelė');
			$table->string('I64_KODAS_WW', 12)->nullable()->comment('POS operacijos Nr.');
			$table->dateTime('I64_OP_DATE')->nullable()->comment('Operacijos data');
			$table->string('I64_PAV', 40)->nullable()->comment('Aprašymas');
			$table->integer('I64_TASKAI')->nullable()->comment('Taškai');
			$table->integer('I64_TIPAS')->nullable()->comment('Tipas: 1-taškai,2-apmokėjimas,3-prekė');
			$table->string('I64_KODAS_PS', 12)->nullable()->comment('Prekė/Sąskaita');
			$table->float('I64_SUMA', 12)->nullable()->comment('Suma');
			$table->string('I64_ADDUSR', 12)->nullable()->comment('Įrašo autorius');
			$table->string('I64_USERIS', 12)->nullable()->comment('Kas koregavo');
			$table->dateTime('I64_R_DATE')->nullable()->comment('Kada koregavo');
			$table->string('I64_KODAS_US', 12)->nullable()->comment('Matavimo vienetas');
			$table->string('I64_KODAS_IS', 12)->nullable()->comment('Padalinys');
			$table->string('I64_REZERVAS1', 12)->nullable()->comment('Rezervas 1');
			$table->string('I64_REZERVAS2', 12)->nullable()->comment('Rezervas 2');
			$table->string('I64_REZERVAS3', 60)->nullable()->comment('Rezervas 3');
			$table->string('I64_KODAS_DL_A', 12)->nullable()->comment('Alternatyvus lojalumo kodas');
			$table->string('I64_ID_PAR', 12)->nullable()->comment('Parduotuvės Id.');
			$table->string('I64_ID_POS', 12)->nullable()->comment('POS id.');
			$table->string('I64_KORTELES_ID', 40)->nullable()->comment('Kortelės Nr.');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('I64_LOJO');
	}

}
