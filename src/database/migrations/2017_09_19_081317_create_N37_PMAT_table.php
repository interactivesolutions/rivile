<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateN37PMATTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('N37_PMAT', function(Blueprint $table)
		{
			$table->integer('COUNT', true);
			$table->string('ID', 36)->unique('ID_UNIQUE');
			$table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('DELETED_AT')->nullable();
			$table->string('N37_KODAS_PS', 12)->nullable()->comment('Prekės kodas');
			$table->string('N37_KODAS_US', 12)->nullable()->comment('Matavimo kodas');
			$table->string('N37_BAR_KODAS', 12)->nullable()->comment('Prekės Bar kodas');
			$table->string('N37_TRUM_PAV', 16)->nullable()->comment('Trumpas prekės pav. siunčiant į kasas');
			$table->string('N37_PAV', 40)->nullable()->comment('Ilgas prekės pavadinimas');
			$table->boolean('N37_KASOS_POZ')->nullable()->comment('Svėrimo požumis:0-ne,1-taip');
			$table->boolean('N37_SVARST_POZ')->nullable()->comment('Siųsti į svarstykles:0-ne,1-taip');
			$table->string('N37_SK_SVARST', 4)->nullable()->comment('Svarstyklių skyrius');
			$table->string('N37_TAROS_GR', 4)->nullable()->comment('Taros grupė');
			$table->integer('N37_TAROS_SVORIS')->nullable()->comment('Taros svoris');
			$table->integer('N37_FRAKCIJA_A')->nullable()->comment('Alternatyvaus matavimo frakcija');
			$table->integer('N37_FRAKCIJA')->nullable()->comment('Pagrindinio matavimo frakcija');
			$table->integer('N37_KOEFICI')->nullable()->comment('Santykis su pagrindiniu matu');
			$table->float('N37_NETTO', 14, 3)->nullable()->comment('Prekės vieneto neto');
			$table->float('N37_BRUTTO', 14, 3)->nullable()->comment('Prekės vieneto bruto');
			$table->float('N37_TURIS', 18, 10)->nullable()->comment('Prekės vieneto tūris');
			$table->float('N37_ILGIS', 14, 3)->nullable()->comment('Prekės ilgis');
			$table->float('N37_PLOTIS', 14, 3)->nullable()->comment('Prekės plotis');
			$table->float('N37_AUKSTIS', 14, 3)->nullable()->comment('Prekės aukštis');
			$table->dateTime('N37_R_DATE')->nullable()->comment('Kada koregavo');
			$table->string('N37_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
			$table->string('N37_USERIS', 12)->nullable()->comment('Kas koregavo');
			$table->integer('N37_LAIKAS_KROV')->nullable()->comment('Krovimo darbų laikas');
			$table->integer('N37_ORIENTACIJA')->nullable()->comment('Prekės orientacija');
			$table->integer('N37_AR_VIRS')->nullable()->comment(' Ar transportuojant prekė dedasi ant viršaus');
			$table->float('N37_VIRS_SVOR', 14, 3)->nullable()->comment('Koks svoris galimas ant viršaus');
			$table->float('N37_VIRS_PAK', 14, 3)->nullable()->comment('Kiek pakuočių galima dėti vieną ant kitos
');
			$table->string('N37_KODAS_US_PAK', 12)->nullable()->comment('Standartinis mat. vienetas');
			$table->integer('N37_KIEKIS_PAK')->nullable()->comment('Santykis su alternatyviu matu');
			$table->integer('N37_PAK_TIPAS')->nullable()->comment('Pakuotės tipas');
			$table->float('N37_PAK_MASE', 14, 3)->nullable()->comment('Pakuotės masė');
			$table->string('N37_KODAS_LS_1', 12)->nullable()->comment('Logistikos kodas 1');
			$table->string('N37_KODAS_LS_2', 12)->nullable()->comment('Logistikos kodas 2');
			$table->string('N37_REZERVAS', 40)->nullable()->comment('Rezervas');
			$table->string('N37_APSKRITIS', 3)->nullable()->comment('Apskritis');
			$table->string('N37_SANDORIS', 3)->nullable()->comment('Sandoris');
			$table->string('N37_SALYGOS', 3)->nullable()->comment('Pristatymo sąlygos');
			$table->string('N37_RUSIS', 3)->nullable()->comment('Rūšis');
			$table->string('N37_SALIS', 3)->nullable()->comment('Šalis gavėja');
			$table->string('N37_MATAS', 3)->nullable()->comment('Mato vnt.');
			$table->string('N37_SALIS_K', 3)->nullable()->comment('Kilmės šalis');
			$table->string('N37_VAISTO_ID', 12)->nullable()->comment('Vaisto Id.');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('N37_PMAT');
	}

}
