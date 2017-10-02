<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateI07PARDTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('I07_PARD', function(Blueprint $table)
		{
			$table->integer('COUNT', true);
			$table->string('id', 36)->unique('ID_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('deleted_at')->nullable();
			$table->string('I07_KODAS_PO', 12)->nullable()->comment('Operacijos numeris');
			$table->integer('I07_EIL_NR')->nullable()->comment('Eilutės numeris operacijoje');
			$table->integer('I07_TIPAS')->nullable()->comment('Tipas:1-prekė,2-paslauga,3-kodas,4-pranesimas,5-aprašymas');
			$table->string('I07_KODAS', 12)->nullable()->comment('Prekės, paslaugos,... kodas');
			$table->string('I07_PAV', 40)->nullable()->comment('Prekės, paslaugos,... pavadinimas');
			$table->string('I07_KODAS_TR', 12)->nullable()->comment('Transporto dokumento numeris');
			$table->string('I07_KODAS_IS', 12)->nullable()->comment('Padalinio kodas');
			$table->string('I07_KODAS_OS', 12)->nullable()->comment('Objekto kodas');
			$table->string('I07_KODAS_OS_C', 12)->nullable()->comment('Pardavimo centro kodas');
			$table->string('I07_SERIJA', 12)->nullable()->comment('Serija');
			$table->string('I07_KODAS_US', 12)->nullable()->comment('Pagrindinio matavimo vieneto kodas');
			$table->integer('I07_KIEKIS')->nullable()->comment('Kiekis pagrindiniu matavimo vienetu');
			$table->integer('I07_FRAKCIJA')->nullable()->comment('Pagrindinio matavimo vnt. frakcija');
			$table->string('I07_KODAS_US_P', 12)->nullable()->comment('Pajamavimo alternatyvus matavimo vieneto kodas');
			$table->string('I07_KODAS_US_A', 12)->nullable()->comment('Pardavimo alternatyvus matavimo vieneto kodas');
			$table->integer('I07_ALT_KIEKIS')->nullable()->comment('Alternatyvaus matavimo kiekis');
			$table->integer('I07_ALT_FRAK')->nullable()->comment('Alternatyvaus kiekio frakcija');
			$table->float('I07_VAL_KAINA', 18, 4)->nullable()->comment('Kaina valiuta');
			$table->float('I07_SUMA_VAL', 18)->nullable()->comment('Valiutos suma');
			$table->float('I07_KAINA_BE', 12, 4)->nullable()->comment('Kaina be PVM');
			$table->float('I07_KAINA_SU', 12, 4)->nullable()->comment('Kaina su PVM');
			$table->float('I07_NUOLAIDA', 6)->nullable()->comment('Nuolaidos procentas');
			$table->boolean('I07_ISLAIDU_M')->nullable()->comment('Ar skaičiuoti nuo išlaidų PVM:0-ne,1-taip');
			$table->float('I07_ISLAIDOS', 12)->nullable()->comment('Išlaidos');
			$table->float('I07_ISLAIDOS_PVM', 12)->nullable()->comment('PVM nuo išlaidų');
			$table->boolean('I07_MUITAS_M')->nullable()->comment('Ar skaičiuoti nuo muitų PVM:0-ne,1-taip');
			$table->float('I07_MUITAS', 12)->nullable()->comment('Muito suma');
			$table->float('I07_MUITAS_PVM', 12)->nullable()->comment('PVM nuo muito');
			$table->boolean('I07_AKCIZAS_M')->nullable()->comment('Ar skaičiuoti nuo akcizo PVM:0-ne,1-taip');
			$table->float('I07_AKCIZAS', 12)->nullable()->comment('Akcizas');
			$table->float('I07_AKCIZAS_PVM', 12)->nullable()->comment('PVM nuo akcizas');
			$table->boolean('I07_MOKESTIS')->nullable()->comment('Ar skaičiuoti PVM:0-ne,1-taip');
			$table->float('I07_MOKESTIS_P', 6)->nullable()->comment('PVM procentas');
			$table->float('I07_PVM', 12)->nullable()->comment('PVM suma');
			$table->float('I07_SUMA', 12)->nullable()->comment('Suma be PVM');
			$table->float('I07_PAR_KAINA', 12, 4)->nullable()->comment('Pardavimo kaina sistemoje');
			$table->float('I07_PAR_KAINA_N', 12, 4)->nullable()->comment('Nauja pardavimo kaina');
			$table->float('I07_MOK_SUMA', 12)->nullable()->comment('Eilė');
			$table->float('I07_SAVIKAINA', 12)->nullable()->comment('Savikainos suma');
			$table->dateTime('I07_GALIOJA_IKI')->nullable()->comment('Prekės galiojimo terminas');
			$table->integer('I07_PERKELTA')->nullable()->comment('Perkėlimo požymis:1-neperkelta,2-perkelta');
			$table->string('I07_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
			$table->string('I07_USERIS', 12)->nullable()->comment('Kas koregavo');
			$table->dateTime('I07_R_DATE')->nullable()->comment('Koregavimo laikas');
			$table->string('I07_SERTIFIKATAS', 12)->nullable()->comment('Sertifikato kodas');
			$table->string('I07_KODAS_KT', 12)->nullable()->comment('Sutarties numeris');
			$table->string('I07_KODAS_K0', 12)->nullable()->comment('Sutarties priedas');
			$table->string('I07_KODAS_KV', 12)->nullable()->comment('Krovinio kodas');
			$table->string('I07_KODAS_VZ', 12)->nullable()->comment('Vežimo kodas');
			$table->dateTime('I07_ADD_DATE')->nullable()->comment('Eilutės sukūrimo laikas');
			$table->string('I07_APSKRITIS', 3)->nullable()->comment('Apskritis');
			$table->string('I07_SANDORIS', 3)->nullable()->comment('Sandoris');
			$table->string('I07_SALYGOS', 3)->nullable()->comment('Pristatymo sąlygos');
			$table->string('I07_RUSIS', 3)->nullable()->comment('Rūšis');
			$table->string('I07_SALIS', 3)->nullable()->comment('Šalis gavėja');
			$table->string('I07_MATAS', 3)->nullable()->comment('Mato vnt.');
			$table->string('I07_SALIS_K', 3)->nullable()->comment('Kilmės šalis ');
			$table->float('I07_MASE', 14, 3)->nullable()->comment('Intrastate masė');
			$table->float('I07_INT_KIEKIS', 14, 3)->nullable()->comment('Intrastate kiekis');
			$table->float('I07_PVM_VAL', 18)->nullable()->comment('PVM valiuta');
			$table->string('I07_KODAS_KS', 12)->nullable()->comment('Tiekėjo kodas');
			$table->float('I07_KIEKIS_A', 12, 4)->nullable()->comment('Alternatyvus kiekis(naudojamas tik informacijos įdėjimui per webservisą)');
			$table->string('I07_BAR_KODAS', 12)->nullable()->comment('Bar_kodas(naudojamas tik informacijos įdėjimui per webservisą)');
			$table->string('I07_APRASYMAS1', 150)->nullable()->comment('Aprašymo laukas 1');
			$table->string('I07_APRASYMAS2', 150)->nullable()->comment('Aprašymo laukas 2');
			$table->string('I07_APRASYMAS3', 150)->nullable()->comment('Aprašymo laukas 3');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('I07_PARD');
	}

}
