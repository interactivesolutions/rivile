<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateN87TPRETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('N87_TPRE', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('ID_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('deleted_at')->nullable();
			$table->string('N87_KODAS_PS', 12)->nullable()->comment('Prekė');
			$table->string('N87_KODAS_US', 12)->nullable()->comment('Mat.Vnt.');
			$table->string('N87_KODAS_KS', 12)->nullable()->comment('Klientas');
			$table->string('N87_PAV', 100)->nullable()->comment('Pavadinimas');
			$table->string('N87_KODAS', 100)->nullable()->comment('Kliento prekės kodas');
			$table->string('N87_APRASYMAS', 100)->nullable()->comment('Aprašymas');
			$table->string('N87_EIL1', 100)->nullable()->comment('Eilutė 1');
			$table->string('N87_EIL2', 100)->nullable()->comment('Eilutė 2');
			$table->string('N87_EIL3', 100)->nullable()->comment('Eilutė 3');
			$table->float('N87_NUM1', 14, 4)->nullable()->comment('Skaičius 1');
			$table->float('N87_NUM2', 14, 4)->nullable()->comment('Skaičius 2');
			$table->float('N87_NUM3', 14, 4)->nullable()->comment('Skaičius 3');
			$table->string('N87_USERIS', 12)->nullable()->comment('Kas koregavo');
			$table->dateTime('N87_R_DATE')->nullable()->comment('Kada koregavo');
			$table->string('N87_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('N87_TPRE');
	}

}
