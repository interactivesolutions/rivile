<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateN33KBANTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('N33_KBAN', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('ID_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('deleted_at')->nullable();
			$table->string('N33_KODAS_KS', 12)->nullable()->comment('Kliento kodas');
			$table->integer('N33_EIL_NR')->nullable()->comment('Detalios eilutės numeris');
			$table->string('N33_PAV', 70)->nullable()->comment('Alternatyvus pavadinimas');
			$table->string('N33_ADRESAS', 40)->nullable()->comment('Adresas');
			$table->string('N33_KODAS_VS', 12)->nullable()->comment('Vietovės kodas');
			$table->string('N33_FAX', 40)->nullable()->comment('Fax - numeriai');
			$table->string('N33_TEL', 40)->nullable()->comment('Telefono numeriai');
			$table->string('N33_PAST_KODAS', 9)->nullable()->comment('Pašto kodas');
			$table->string('N33_SHIP_VIA', 15)->nullable()->comment('Pristatymo būdas');
			$table->string('N33_SHIP_FOB', 15)->nullable()->comment('Pristatymo sąlygos');
			$table->integer('N33_NUTYL')->nullable()->comment('Adresas ir bankiniai rekvizitai pagal nutylėjimą');
			$table->string('N33_KODAS_WS', 12)->nullable()->comment('Banko kodas');
			$table->string('N33_S_KODAS', 45)->nullable()->comment('Sąskaitos kodas');
			$table->string('N33_SWIFT', 15)->nullable()->comment('Sąskaitos/Banko swift-as');
			$table->string('N33_KODAS_WS_K', 12)->nullable()->comment('Korespondetinio banko kodas');
			$table->string('N33_KSWIFT', 15)->nullable()->comment('Korespondentinio banko swift-as');
			$table->string('N33_K_SASK', 45)->nullable()->comment('Korespondentinio banko sąskaita');
			$table->string('N33_USERIS', 12)->nullable()->comment('Kas koregavo');
			$table->dateTime('N33_R_DATE')->nullable()->comment('Kada koregavo');
			$table->string('N33_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
			$table->string('N33_KODAS_SS', 12)->nullable()->comment('Sąskaitos kodas');
			$table->string('N33_KODAS_AK', 12)->nullable()->comment('Kliento alternatyvus kodas');
			$table->string('N33_WEB_ADR', 12)->nullable()->comment('Web adresas');
			$table->integer('N33_WEB_POZ')->nullable()->comment('Web požymis');
			$table->string('N33_WEB_ATAS', 13)->nullable()->comment('Web ataskaita');
			$table->integer('N33_WEB_SERV')->nullable()->comment('Web servisas');
			$table->integer('N33_WEB_POZT')->nullable()->comment('Tiesioginis apsikeitimas');
			$table->integer('N33_WEB_POZI')->nullable()->comment('Internetinis apsikeitimas');
			$table->string('N33_WEB_ADRI', 12)->nullable()->comment('Internetinis adresas');
			$table->string('N33_KODAS_LS_1', 12)->nullable()->comment('Logistikos 1 kodas');
			$table->string('N33_KODAS_LS_2', 12)->nullable()->comment('Logistikos 2 kodas');
			$table->string('N33_KODAS_LS_3', 12)->nullable()->comment('Logistikos 3 kodas');
			$table->string('N33_KODAS_LS_4', 12)->nullable()->comment('Logistikos 4 kodas');
			$table->string('N33_KODAS_MS', 12)->nullable()->comment('Menedžerio kodas');
			$table->string('N33_SALIS_K', 5)->nullable()->comment('Šalies kodas');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('N33_KBAN');
	}

}
