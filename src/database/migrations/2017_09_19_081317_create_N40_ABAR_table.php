<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateN40ABARTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('N40_ABAR', function(Blueprint $table)
		{
			$table->integer('COUNT', true);
			$table->string('ID', 36)->unique('ID_UNIQUE');
			$table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('DELETED_AT')->nullable();
			$table->string('N40_BAR_KODAS', 12)->nullable()->comment('Bar kodas');
			$table->string('N40_KODAS_PS', 12)->nullable()->comment('Prekės kodas');
			$table->string('N40_KODAS_US', 12)->nullable()->comment('Matavimo vienetas');
			$table->string('N40_USERIS', 12)->nullable()->comment('Kas koregavo');
			$table->dateTime('N40_R_DATE')->nullable()->comment('Kada koreguotas');
			$table->string('N40_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('N40_ABAR');
	}

}
