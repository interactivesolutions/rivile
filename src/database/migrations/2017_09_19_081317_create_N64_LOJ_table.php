<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateN64LOJTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('N64_LOJ', function(Blueprint $table)
		{
			$table->integer('COUNT', true);
			$table->string('id', 36)->unique('ID_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('deleted_at')->nullable();
			$table->string('N64_KODAS_DL', 12)->nullable()->comment('Kodas');
			$table->dateTime('N64_DATE')->nullable()->comment('Data');
			$table->string('N64_KODAS_KS', 12)->nullable()->comment('Klientas');
			$table->string('N64_PAV', 50)->nullable()->comment('Pavardė');
			$table->string('N64_VARDAS', 50)->nullable()->comment('Vardas');
			$table->string('N64_KODAS_VS', 12)->nullable()->comment('Vietovė');
			$table->string('N64_ADR1', 40)->nullable()->comment('Adresas1');
			$table->string('N64_ADR2', 40)->nullable()->comment('Adresas2');
			$table->string('N64_ADR3', 40)->nullable()->comment('Adresas3');
			$table->dateTime('N64_GIM_DATA')->nullable()->comment('Gimimo data');
			$table->integer('N64_LYTIS')->nullable()->comment('Lytis:1-vyras,2-moteris');
			$table->string('N64_KODAS_LS_1', 12)->nullable()->comment('Logistika 1');
			$table->string('N64_KODAS_LS_2', 12)->nullable()->comment('Logistika 2');
			$table->string('N64_KODAS_LS_3', 12)->nullable()->comment('Logistika 3');
			$table->string('N64_KODAS_LS_4', 12)->nullable()->comment('Logistika 4');
			$table->integer('N64_POZ_DATE')->nullable()->comment('Terminuota');
			$table->dateTime('N64_BEG_DATE')->nullable()->comment('Pradžios data');
			$table->dateTime('N64_END_DATE')->nullable()->comment('Pabaigos data');
			$table->string('N64_USERIS', 12)->nullable()->comment('Kas koregavo');
			$table->dateTime('N64_R_DATE')->nullable()->comment('Kada koregavo');
			$table->string('N64_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
			$table->string('N64_ASM_KODAS', 20)->nullable()->comment('Asmens kodas');
			$table->string('N64_TEL', 30)->nullable()->comment('Telefono Nr.');
			$table->string('N64_MOB_TEL', 30)->nullable()->comment('Mobilus telefonas');
			$table->string('N64_E_MAIL', 60)->nullable()->comment('E-mail');
			$table->string('N64_KORTELES_ID', 40)->nullable()->comment('Kortelės ID');
			$table->boolean('N64_BLOK_POZ')->nullable()->comment('Blokavimo požymis: 0-Ne,1-Taip');
			$table->dateTime('N64_BLOK_DATE')->nullable()->comment('Blokavimo data');
			$table->string('N64_BLOK_USER', 12)->nullable()->comment('Blokavimo vartotojas');
			$table->string('N64_KODAS_LS_5', 12)->nullable()->comment('Logistikos kodas 5');
			$table->string('N64_KODAS_LS_6', 12)->nullable()->comment('Logistikos kodas 6');
			$table->string('N64_KODAS_LS_7', 12)->nullable()->comment('Logistikos kodas 7');
			$table->string('N64_KODAS_LS_8', 12)->nullable()->comment('Logistikos kodas 8');
			$table->string('N64_KORTELES_ID_A', 40)->nullable()->comment('Pagrindinės kortelės nr.');
			$table->string('N64_KODAS_SM', 12)->nullable()->comment('Asmens kodas');
			$table->boolean('N64_NEAKTYVI')->nullable()->comment('Neaktyvi- 0-aktyi,1-Neaktyvi');
			$table->integer('N64_KORTELES_ID_POZ')->nullable()->comment('Kortelių intervalo požymis');
			$table->string('N64_KORTELES_ID_I1', 40)->nullable()->comment('Kortelių intervalo pradžia');
			$table->string('N64_KORTELES_ID_I2', 40)->nullable()->comment('Kortelių intervalo pabaiga');
			$table->string('N64_APRAS', 40)->nullable()->comment('Aprasymas');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('N64_LOJ');
	}

}
