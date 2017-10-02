<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateI09VIHTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('I09_VIH', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('ID_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('deleted_at')->nullable();
			$table->string('I09_KODAS_VD', 12)->nullable()->comment('Operacijos numeris');
			$table->integer('I09_TIPAS')->nullable()->comment('Dokumento tipas:1-važtaraštis,2-užsakymas');
			$table->string('I09_DOK_NR', 12)->nullable()->comment('Dokumento numeris');
			$table->dateTime('I09_IS_DATA')->nullable()->comment('Išvežimo data');
			$table->integer('I09_GAV_POZ')->nullable()->comment('Rezervas');
			$table->dateTime('I09_GAV_DATA')->nullable()->comment('Prekių gavimo data');
			$table->string('I09_KODAS_IS1', 12)->nullable()->comment('Padalinio kodas iš kurio veža');
			$table->string('I09_KODAS_SS_T', 12)->nullable()->comment('Analitinės operacijos numeris');
			$table->boolean('I09_NUTOL1')->nullable()->comment('Padalinys iš kurio veža nutolęs?:0-ne,1-taip');
			$table->string('I09_EIL1', 40)->nullable();
			$table->string('I09_EIL2', 40)->nullable();
			$table->string('I09_EIL3', 40)->nullable();
			$table->string('I09_KODAS_IS2', 12)->nullable();
			$table->boolean('I09_NUTOL2')->nullable();
			$table->string('I09_A_EIL1', 40)->nullable();
			$table->string('I09_A_EIL2', 40)->nullable();
			$table->string('I09_A_EIL3', 40)->nullable();
			$table->integer('I09_PERKELTA1')->nullable();
			$table->integer('I09_PERKELTA2')->nullable();
			$table->integer('I09_IMP_EXP')->nullable();
			$table->string('I09_USERIS', 12)->nullable();
			$table->dateTime('I09_R_DATE')->nullable();
			$table->string('I09_ADDUSR', 12)->nullable();
			$table->float('I09_EIL_SK', 12)->nullable();
			$table->string('I09_KODAS_SM1', 12)->nullable();
			$table->string('I09_KODAS_SM2', 12)->nullable();
			$table->string('I09_PAV', 60)->nullable();
			$table->string('I09_KODAS_MS', 12)->nullable();
			$table->string('I09_KODAS_LS_1', 12)->nullable();
			$table->string('I09_KODAS_LS_2', 12)->nullable();
			$table->string('I09_KODAS_LS_3', 12)->nullable();
			$table->string('I09_KODAS_LS_4', 12)->nullable();
			$table->dateTime('I09_ADD_DATE')->nullable();
			$table->dateTime('I09_PER1_DATE')->nullable();
			$table->string('I09_PER1_USER', 12)->nullable();
			$table->string('I09_KODAS_AU', 12)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('I09_VIH');
	}

}
