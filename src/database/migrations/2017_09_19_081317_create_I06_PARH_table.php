<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateI06PARHTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('I06_PARH', function(Blueprint $table)
		{
			$table->integer('COUNT', true);
			$table->string('id', 36)->unique('ID_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('deleted_at')->nullable();
			$table->string('I06_KODAS_PO', 12)->nullable()->comment('Operacijos numeris');
			$table->integer('I06_OP_TIP')->nullable()->comment('Tipas: pirkimų (1-V,2-G,3-U,4-P) pardavimų (51-V,52-G,53-U,54-R,55-P,56-POS)');
			$table->boolean('I06_VAL_POZ')->nullable()->comment('Ar valiutinis dokumentas?:0-ne,1-taip');
			$table->boolean('I06_PVM_TIP')->nullable()->comment('Kainos su PVM:0-ne,1-taip');
			$table->boolean('I06_OP_STORNO')->nullable()->comment('Nekoreguojama operacija:0-ne,1-taip');
			$table->string('I06_DOK_NR', 20)->nullable()->comment('Dokumento numeris');
			$table->dateTime('I06_OP_DATA')->nullable()->comment('Operacijos data');
			$table->dateTime('I06_DOK_DATA')->nullable()->comment('Dokumento data/Galiojimo data');
			$table->string('I06_KODAS_MS', 12)->nullable()->comment('Menedžerio kodas');
			$table->string('I06_KODAS_KS', 12)->nullable()->comment('Kliento kodas');
			$table->string('I06_KODAS_SS', 12)->nullable()->comment('Pinigų sąskaitos kodas');
			$table->string('I06_PAV', 70)->nullable()->comment('Kliento pavadinimas');
			$table->string('I06_ADR', 40)->nullable()->comment('Kliento adresas');
			$table->string('I06_ATSTOVAS', 40)->nullable()->comment('Atstovas');
			$table->string('I06_KODAS_VS', 12)->nullable()->comment('Vietovės kodas');
			$table->string('I06_PAV2', 70)->nullable()->comment('Pristatymo pavadinimas');
			$table->string('I06_ADR2', 40)->nullable()->comment('Pristatymo adresas 1');
			$table->string('I06_ADR3', 40)->nullable()->comment('Pristatymo adresas 2');
			$table->string('I06_KODAS_VL', 12)->nullable()->comment('Valiutos kodas');
			$table->string('I06_KODAS_XS', 12)->nullable()->comment('Mokesčio kodas');
			$table->string('I06_KODAS_SS_P', 12)->nullable()->comment('Skolos sąskaita');
			$table->string('I06_PASTABOS', 40)->nullable()->comment('Pastabos');
			$table->string('I06_MOK_DOK', 12)->nullable()->comment('Mokėjimo dokumento numeris');
			$table->float('I06_MOK_SUMA', 12)->nullable()->comment('Apmokėjimo požymis:0-ne,1-taip');
			$table->string('I06_KODAS_SS_M', 12)->nullable()->comment('Rezervas');
			$table->float('I06_SUMA_VAL', 18)->nullable()->comment('Valiutos suma');
			$table->float('I06_SUMA', 12)->nullable()->comment('Suma be PVM');
			$table->float('I06_SUMA_PVM', 12)->nullable()->comment('PVM suma');
			$table->float('I06_KURSAS', 20, 10)->nullable()->comment('Valiutos kursas');
			$table->integer('I06_PERKELTA')->nullable()->comment('Perkėlimo požymis:1-neperkelta,2-perkelta,3-koreguota');
			$table->string('I06_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
			$table->dateTime('I06_R_DATE')->nullable()->comment('Koregavimo laikas');
			$table->string('I06_USERIS', 12)->nullable()->comment('Kas koregavimo');
			$table->string('I06_KODAS_AU', 12)->nullable()->comment('Automobilio kodas');
			$table->string('I06_KODAS_SM', 12)->nullable()->comment('Asmuo');
			$table->boolean('I06_INTRASTAT')->nullable()->comment('Intrastat ataskaitos: 0-Ne, 1-Taip');
			$table->string('I06_DOK_REG', 20)->nullable()->comment('Dokumentas registre');
			$table->string('I06_KODAS_AK', 12)->nullable()->comment('Kliento alternatyvus kodas');
			$table->float('I06_SUMA_WK', 12)->nullable()->comment('WB įsipareigojimų suma');
			$table->string('I06_KODAS_LS_1', 12)->nullable()->comment('Logistika 1');
			$table->string('I06_KODAS_LS_2', 12)->nullable()->comment('Logistika 2');
			$table->string('I06_KODAS_LS_3', 12)->nullable()->comment('Logistika 3');
			$table->string('I06_KODAS_LS_4', 12)->nullable()->comment('Logistika 4');
			$table->integer('I06_VAL_POZ_PVM')->nullable()->comment('PVM valiuta požymis');
			$table->float('I06_PVM_VAL', 18)->nullable()->comment('PVM valiuta');
			$table->integer('I06_WEB_POZ')->nullable()->comment('Web požymis');
			$table->string('I06_WEB_ATAS', 13)->nullable()->comment('Web Ataskaita');
			$table->integer('I06_WEB_PERKELTA')->nullable()->comment('Web perkelta');
			$table->string('I06_APRASYMAS1', 150)->nullable()->comment('Aprašymo laukas 1');
			$table->string('I06_APRASYMAS2', 150)->nullable()->comment('Aprašymo laukas 2');
			$table->string('I06_APRASYMAS3', 150)->nullable()->comment('Aprašymo laukas 3');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('I06_PARH');
	}

}
