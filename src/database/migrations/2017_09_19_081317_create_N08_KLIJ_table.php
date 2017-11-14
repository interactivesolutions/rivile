<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateN08KLIJTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('N08_KLIJ', function(Blueprint $table) {
            $table->integer('count', true);
            $table->string('id', 36)->unique('ID_UNIQUE');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('deleted_at')->nullable();
            $table->string('N08_KODAS_KS', 12)->nullable()->comment('Kliento kodas');
            $table->integer('N08_RUSIS')->nullable()->comment('Rūšis:1-pirkėjas,2-tiekėjas,3-pirkėjas/tiekėjas,4-įmonė');
            $table->string('N08_PVM_KODAS', 25)->nullable()->comment('Kliento PVM kodas');
            $table->string('N08_IM_KODAS', 13)->nullable()->comment('Kliento įmonės kodas');
            $table->string('N08_PAV', 70)->nullable()->comment('Kliento pavadinimas');
            $table->string('N08_ADR', 40)->nullable()->comment('Adresas');
            $table->string('N08_KODAS_VS', 12)->nullable()->comment('Vietovės kodas');
            $table->string('N08_PASTAS', 9)->nullable()->comment('Pašto indeksas');
            $table->string('N08_ATSTOVAS', 40)->nullable()->comment('Atstovas');
            $table->string('N08_E_MAIL', 40)->nullable()->comment('E-mail adresas');
            $table->string('N08_FAX_NUM', 40)->nullable()->comment('Fax-o numeriai');
            $table->string('N08_TEL', 40)->nullable()->comment('Telefonų numeriai');
            $table->string('N08_MOB_TEL', 40)->nullable()->comment('Mobilus telefonas');
            $table->string('N08_KODAS_LS_1', 12)->nullable()->comment('Logistikos 1 kodas');
            $table->string('N08_KODAS_LS_2', 12)->nullable()->comment('Logistikos 2 kodas');
            $table->string('N08_KODAS_LS_3', 12)->nullable()->comment('Logistikos 3 kodas');
            $table->string('N08_KODAS_LS_4', 12)->nullable()->comment('Logistikos 4 kodas');
            $table->integer('N08_TIPAS_PIRK')->nullable()->comment('Pirkėjo tipas:1-pagal dokumentus,2-pagal sąskaitas');
            $table->integer('N08_TIPAS_TIEK')->nullable()->comment('Tiekėjo tipas:1-pagal dokumentus,2-pagal sąskaitas');
            $table->string('N08_KODAS_GS', 12)->nullable()->comment('Klientų grupės kodas');
            $table->float('N08_CREDIT_LIM', 12)->nullable()->comment('Pirkėjo kredito limitas');
            $table->string('N08_KODAS_DS', 12)->nullable()->comment('Sąskaitų ryšio kodas');
            $table->float('N08_DELSPINIGIAI', 5)->nullable()->comment('Pirkėjo delspinigių procentas');
            $table->string('N08_KODAS_QS', 12)->nullable()->comment('Pranešimo kodas');
            $table->string('N08_NUOL_GR', 6)->nullable()->comment('Pirkėjo nuolaidos grupė');
            $table->string('N08_KODAS_XS_T', 12)->nullable()->comment('Tiekėjo mokesčių lentelės kodas');
            $table->string('N08_KODAS_XS_P', 12)->nullable()->comment('Pirkėjo mokesčių lentelės kodas');
            $table->string('N08_KODAS_TS_T', 12)->nullable()->comment('Tiekėjo terminų lentelės kodas');
            $table->string('N08_KODAS_TS_P', 12)->nullable()->comment('Pirkėjo terminų lentelės kodas');
            $table->dateTime('N08_ADD_DATE')->nullable()->comment('Sukūrimo laikas');
            $table->boolean('N08_SUTARTIS')->nullable()->comment('Ar kontroliuoti pirkėjo sutarčių sąlygas:0-ne,1-taip');
            $table->boolean('N08_KAIN_ABC')->nullable()->comment('Ar kontroliuoti pirkėjo sutarčių sąlygas:0-ne,1-taip');
            $table->integer('N08_DIENOS')->nullable()->comment('Rezervas');
            $table->boolean('N08_TIEK_DIEN')->nullable()->comment('Ar būtinai reikalinga tiekėjo sutartis:0-ne,1-taip');
            $table->boolean('N08_KRED_LIM')->nullable()->comment('Ar kontroliuoti pirkėjo kredito limitą atliekant pardavimus:0-ne,1-taip');
            $table->boolean('N08_PRIEDAI')->nullable()->comment('Ar kontroliuoti tiekėjo sutarčių sąlygas:0-ne,1-taip');
            $table->string('N08_KODAS_IS', 12)->nullable()->comment('Klientui priskirtas padalinio kodas');
            $table->string('N08_KODAS_OS_P', 12)->nullable()->comment('Klientui priskirtas pardavimų centro kodas');
            $table->string('N08_KODAS_OS', 12)->nullable()->comment('Klientui priskirtas objekto kodas');
            $table->string('N08_KODAS_MS_P', 12)->nullable()->comment('Menedžerio pardavėjo kodas');
            $table->string('N08_KODAS_MS_T', 12)->nullable()->comment('Menedžerio pirkėjo kodas');
            $table->boolean('N08_VAL_POZ')->nullable()->comment('Ar galima atsiskaitinėti valiuta:0-ne,1-taip');
            $table->string('N08_KODAS_VL_1', 12)->nullable()->comment('Atsiskaitymų valiutos kodas 1');
            $table->string('N08_KODAS_VL_2', 12)->nullable()->comment('Atsiskaitymų valiutos kodas 2');
            $table->string('N08_KODAS_VL_3', 12)->nullable()->comment('Atsiskaitymų valiutos kodas 3');
            $table->string('N08_KODAS_VL_4', 12)->nullable()->comment('Atsiskaitymų valiutos kodas 4');
            $table->string('N08_KODAS_VL_5', 12)->nullable()->comment('Atsiskaitymų valiutos kodas 5');
            $table->string('N08_KODAS_VL_6', 12)->nullable()->comment('Atsiskaitymų valiutos kodas 6');
            $table->boolean('N08_POZ_DATE')->nullable()->comment('Terminuotas0-ne,1-taip');
            $table->dateTime('N08_BEG_DATE')->nullable()->comment('Pradžios data');
            $table->dateTime('N08_END_DATE')->nullable()->comment('Pabaigos data');
            $table->string('N08_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
            $table->string('N08_USERIS', 12)->nullable()->comment('Kas koregavo');
            $table->dateTime('N08_R_DATE')->nullable()->comment('Koregavimo laikas');
            $table->integer('N08_GER_POZ')->nullable()->comment('Ar nepatikrintas');
            $table->string('N08_KODAS_LS_5', 12)->nullable()->comment('Logistikos kodas 5');
            $table->string('N08_KODAS_LS_6', 12)->nullable()->comment('Logistikos kodas 6');
            $table->string('N08_KODAS_LS_7', 12)->nullable()->comment('Logistikos kodas 7');
            $table->string('N08_KODAS_LS_8', 12)->nullable()->comment('Logistikos kodas 8');
            $table->integer('N08_T_LIM_POZ')->nullable()->comment('Tiekėjo kredito limito požymis');
            $table->float('N08_T_KRED_LIM', 12)->nullable()->comment('Tiekėjo kredito limitas');
            $table->string('N08_KODAS_VL_LIM', 12)->nullable()->comment('Tiekėjo limito valiuta');
            $table->string('N08_KAINYNAS', 1)->nullable()->comment('Kainynas');
            $table->integer('N08_AR_REIK_P')->nullable()->comment('Ar reikalauti kredito limito');
            $table->integer('N08_AR_REIK_T')->nullable()->comment('Ar reikalauti kredito limito (tiekėjui)');
            $table->string('N08_REZERVAS', 40)->nullable()->comment('Trumpas įmonės aprašymas');
            $table->boolean('N08_INTRASTAT')->nullable()->comment('Intrastat ataskaitos: 0-Ne, 1-Taip');
            $table->boolean('N08_WB_KR')->nullable()->comment('Ar sekamas WB įsipareigojimai: 0-ne, 1-Taip');
            $table->boolean('N08_WB_KR_GR')->nullable()->comment('Ar griežta WB kredito kontrolė: 0-Ne,1-Taip');
            $table->float('N08_SUMA_WK_LIMIT', 12)->nullable()->comment('WB Kredito limito suma');
            $table->float('N08_SUMA_WK', 12)->nullable()->comment('Įsipareigojimų pradinė suma');
            $table->string('N08_KODAS_VL_U', 12)->nullable()->comment('Užsakymų formavimo valiuta');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('N08_KLIJ');
    }

}
