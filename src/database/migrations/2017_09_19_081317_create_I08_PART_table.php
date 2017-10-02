<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateI08PARTTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('I08_PART', function(Blueprint $table)
		{
			$table->integer('COUNT', true);
			$table->string('ID', 36)->unique('ID_UNIQUE');
			$table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('DELETED_AT')->nullable();
			$table->string('I08_KODAS_PO', 12)->nullable()->comment('Operacijos Numeris');
			$table->integer('I08_EIL_NR')->nullable()->comment('Eilės numeris');
			$table->integer('I08_NUOL_D')->nullable()->comment('Diskontų dienos');
			$table->float('I08_NUOL_P', 10, 5)->nullable()->comment('Diskontų procentas');
			$table->integer('I08_MOK_D')->nullable()->comment('Mokėjimo dienos');
			$table->float('I08_MOK_P', 10, 5)->nullable()->comment('Mokėjimo procentas');
			$table->float('I08_SUMA_PLK', 12)->nullable()->comment('Palūkanų suma');
			$table->dateTime('I08_R_DATE')->nullable()->comment('Koregavimo laikas');
			$table->string('I08_USERIS', 12)->nullable()->comment('Kas koregavo');
			$table->string('I08_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
			$table->float('I08_MOK_S', 12)->nullable()->comment('Mokėjimo suma');
			$table->float('I08_PLK_P', 10, 5)->nullable()->comment('Palūkanų procentas');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('I08_PART');
	}

}
