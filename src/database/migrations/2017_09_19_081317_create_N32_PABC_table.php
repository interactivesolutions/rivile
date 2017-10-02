<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateN32PABCTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('N32_PABC', function(Blueprint $table)
		{
			$table->integer('COUNT', true);
			$table->string('ID', 36)->unique('ID_UNIQUE');
			$table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('DELETED_AT')->nullable();
			$table->string('N32_KODAS_PS', 12)->nullable()->comment('Prekės/Paslaugos kodas');
			$table->string('N32_KODAS_US', 12)->nullable()->comment('Matavimo vieneto kodas');
			$table->string('N32_TIPAS', 1)->nullable()->comment('Nuolaidos tipas A,B,C,...J');
			$table->dateTime('N32_G_DATE')->nullable()->comment('Galioja nuo');
			$table->float('N32_KAINA1', 12, 4)->nullable()->comment('Kaina 1');
			$table->float('N32_KAINA2', 12, 4)->nullable()->comment('Kaina 2 priklausanti nuo kiekio 2 ');
			$table->integer('N32_KIEKIS2')->nullable()->comment('Kiekis 2');
			$table->float('N32_KAINA3', 12, 4)->nullable()->comment('Kaina 3 priklausanti nuo kiekio 3');
			$table->integer('N32_KIEKIS3')->nullable()->comment('Kiekis 3');
			$table->float('N32_KAINA4', 12, 4)->nullable()->comment('Kaina 4 priklausanti nuo kiekio 4');
			$table->integer('N32_KIEKIS4')->nullable()->comment('Kiekis 4');
			$table->string('N32_USERIS', 12)->nullable()->comment('Kas koregavo');
			$table->dateTime('N32_R_DATE')->nullable()->comment('Kada koregavo');
			$table->string('N32_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
			$table->string('N32_ID', 12)->nullable()->comment('Įmonės Id.');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('N32_PABC');
	}

}
