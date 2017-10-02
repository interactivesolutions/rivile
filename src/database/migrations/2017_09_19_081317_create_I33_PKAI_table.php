<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateI33PKAITable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('I33_PKAI', function(Blueprint $table)
		{
			$table->integer('COUNT', true);
			$table->string('id', 36)->unique('ID_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('deleted_at')->nullable();
			$table->string('I33_KODAS_PS', 12)->nullable()->comment('Prekės kodas');
			$table->string('I33_KODAS_IS', 12)->nullable()->comment('Padalinio kodas');
			$table->string('I33_KODAS_US', 12)->nullable()->comment('Matavimo kodas');
			$table->float('I33_KAINA', 12, 4)->nullable()->comment('Pardavimo kaina');
			$table->float('I33_KAINA_NEW', 12, 4)->nullable()->comment('Nauja pardavimo kaina');
			$table->float('I33_PPK', 12, 4)->nullable()->comment('Paskutinio pirkimo kaina');
			$table->dateTime('I33_PPK_DATE')->nullable()->comment('Paskutinio pirkimo data');
			$table->string('I33_KODAS_VL', 12)->nullable()->comment('Valiuta');
			$table->float('I33_PPK_VAL', 18, 4)->nullable()->comment('Pirkimo kaina valiuta');
			$table->float('I33_PPK_SAV', 12, 4)->nullable()->comment('Paskutinio pajamavimo vid. kaina');
			$table->dateTime('I33_PPK_SAV_DATE')->nullable()->comment('Paskutinio pajamavimo data');
			$table->string('I33_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
			$table->string('I33_USERIS', 12)->nullable()->comment('Kas koregavo');
			$table->dateTime('I33_R_DATE')->nullable()->comment('Kada koregavo');
			$table->integer('I33_FORMATAS')->nullable()->comment('Formatas spausdinimui');
			$table->string('I33_POZ', 3)->nullable()->comment('Požymiai');
			$table->float('I33_KAINA_BAZ', 12, 4)->nullable()->comment('Bazinė kaina (Vaistams)');
			$table->integer('I33_POZ_POS')->nullable()->comment('POS-uose, kaina 1-nekoreguojama;2-koreguojama;3-kompensuojama');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('I33_PKAI');
	}

}
