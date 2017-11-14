<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateN17PRODTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('N17_PROD', function(Blueprint $table) {
            $table->integer('count', true);
            $table->string('id', 36)->unique('ID_UNIQUE');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('deleted_at')->nullable();
            $table->string('N17_KODAS_PS', 12)->nullable()->comment('Prekės kodas');
            $table->integer('N17_TIPAS')->nullable()->comment('Tipas:1-prekė,2-paslauga');
            $table->string('N17_KODAS_P1', 12)->nullable()->comment('Pirmas alternatyvus kodas');
            $table->string('N17_KODAS_P2', 12)->nullable()->comment('Antras alternatyvus kodas');
            $table->string('N17_KODAS_US', 12)->nullable()->comment('Pagrindinis matavimo vieneto kodas');
            $table->string('N17_PAV', 40)->nullable()->comment('Pavadinimas');
            $table->string('N17_PAVU', 40)->nullable()->comment('Pavadinimas kita kalba');
            $table->string('N17_KODAS_KS', 12)->nullable()->comment('Tiekėjo kodas');
            $table->string('N17_KOD_T', 16)->nullable()->comment('Kodas tiekėjo kataloguose');
            $table->string('N17_KODAS_KS1', 12)->nullable()->comment('Pirmas alternatyvus tiekėjo kodas');
            $table->string('N17_KOD_T1', 16)->nullable()->comment('Kodas pirmo alternatyvaus tiekėjo kataloguose');
            $table->string('N17_KODAS_KS2', 12)->nullable()->comment('Antras alternatyvus tiekėjo kodas');
            $table->string('N17_KOD_T2', 16)->nullable()->comment('Kodas antro alternatyvaus tiekėjo kataloguose');
            $table->string('N17_KODAS_VS', 12)->nullable()->comment('Vietovės kodas');
            $table->string('N17_KODAS_ES', 12)->nullable()->comment('Sezono kodas');
            $table->float('N17_UZSIGUL', 6)->nullable()->comment('Prekės užsigulėjimo procentas');
            $table->integer('N17_BAZ_KIEKIS')->nullable()->comment('Metų bazinis(vidutinis) kiekis');
            $table->integer('N17_ASSEMBLY')->nullable()->comment('Rūšis:1-paprasta,2-komplektuojama,3-išskaidoma,4-generuojama,5-sudėtinė');
            $table->string('N17_KODAS_LS_1', 12)->nullable()->comment('Logistikos 1 kodas');
            $table->string('N17_KODAS_LS_2', 12)->nullable()->comment('Logistikos 2 kodas');
            $table->string('N17_KODAS_LS_3', 12)->nullable()->comment('Logistikos 3 kodas');
            $table->string('N17_KODAS_LS_4', 12)->nullable()->comment('Logistikos 4 kodas');
            $table->string('N17_KODAS_DS', 12)->nullable()->comment('Sąskaitos ryšio kodas');
            $table->string('N17_NUOL_GR', 6)->nullable()->comment('Nuolaidos grupė');
            $table->integer('N17_GALIOJA')->nullable()->comment('Galiojimo dienos');
            $table->boolean('N17_MOKESTIS')->nullable()->comment('Ar prekė apmokestinama:0-ne,1-taip');
            $table->integer('N17_TAX')->nullable()->comment('PVM mokestis,1-A,2-B,3-C,4-D');
            $table->string('N17_KODAS_KS_G', 12)->nullable()->comment('Prekės gamintojo kodas');
            $table->string('N17_KODAS_GS', 12)->nullable()->comment('Grupės kodas');
            $table->boolean('N17_INSTR_POZ')->nullable()->comment('Ar reikia instrukcijos prekei?:0-ne,1-taip');
            $table->string('N17_INSTR_TIP', 1)->nullable()->comment('Instrukcijos tipas');
            $table->boolean('N17_INSTR_VYK')->nullable()->comment('Ar reikia daryti instrukciją?:0-ne,1-taip');
            $table->dateTime('N17_INSTR_DATE')->nullable()->comment('Instrukcijos data');
            $table->string('N17_INSTR_FILE', 12)->nullable()->comment('Instrukcijos failo pavadinimas');
            $table->boolean('N17_URM_POZ')->nullable()->comment('Urmo pozymis:0-ne,1-taip');
            $table->dateTime('N17_URM_DATEIN')->nullable()->comment('Pateko į urmą');
            $table->dateTime('N17_URM_DATEOU')->nullable()->comment('Iškrito iš urmo');
            $table->boolean('N17_KREPS_POZ')->nullable()->comment('Ar krepšelio prekė:0-ne,1-taip');
            $table->string('N17_KREPS_KTG', 1)->nullable()->comment('Krepšelio kategorija');
            $table->integer('N17_KREPS_MIN')->nullable()->comment('Krepšelio minimumas');
            $table->boolean('N17_GARANT_POZ')->nullable()->comment('Ar yra garantija:0-ne,1-taip');
            $table->integer('N17_GARANT_MEN')->nullable()->comment('Garantija mėnesiais');
            $table->string('N17_KODAS_KS3', 12)->nullable()->comment('Garantija atlieka tiekėjas. Kliento kodas');
            $table->boolean('N17_TEMPER_POZ')->nullable()->comment('Temperatūros požymis:0-ne,1-taip');
            $table->integer('N17_TEMPER_MAX')->nullable()->comment('Max temperatūra');
            $table->integer('N17_TEMPER_MIN')->nullable()->comment('Min temperatūra');
            $table->string('N17_TEMPER_TXT', 20)->nullable()->comment('Kitos laikymo sąlygos');
            $table->boolean('N17_SERTIF_POZ')->nullable()->comment('Ar reikia sertifikato:0-ne,1-taip');
            $table->string('N17_KODAS_MS', 12)->nullable()->comment('Marketologo kodas(iš menedžerių sąrašo)');
            $table->float('N17_ANTKAINIS', 6)->nullable()->comment('Antkainio procentas');
            $table->float('N17_MAX_NUOL', 6)->nullable()->comment('Maksimalus nuolaidos procentas parduodant');
            $table->integer('N17_EX_IM_FRAC')->nullable()->comment('Rezervas');
            $table->integer('N17_G_TIME')->nullable()->comment('Rezervas');
            $table->string('N17_KODAS_OS', 12)->nullable()->comment('Objekto kodas');
            $table->integer('N17_VAZ_LAIK')->nullable()->comment('Vežimo laikas');
            $table->integer('N17_UZS_LAIK')->nullable()->comment('Užsakymo laikas');
            $table->integer('N17_PAP_LAIK')->nullable()->comment('Papildomas laikas');
            $table->float('N17_SAN_COST', 10)->nullable()->comment('Sandėliavimo sąnaudos');
            $table->float('N17_UZS_COST', 10)->nullable()->comment('Užsakymo sąnaudos');
            $table->float('N17_TRA_COST', 10)->nullable()->comment('Transportavimo sąnaudos');
            $table->string('N17_MEN_PAV', 65)->nullable()->comment('Pavadinimas skirtas menedžeriams');
            $table->string('N17_MUIT_KOD', 16)->nullable()->comment('Muitinėje prekės kodas');
            $table->integer('N17_SK_KODAS')->nullable()->comment('Prekės skyrius kasoje');
            $table->boolean('N17_INTERNET')->nullable()->comment('Interneto požymis:0-ne,1-taip');
            $table->boolean('N17_DUM_POZ')->nullable()->comment('Ar užsigulėjusi prekė:0-ne,1-taip');
            $table->string('N17_DUM_TIP', 1)->nullable()->comment('Užsigulėjimo tipas');
            $table->dateTime('N17_DUM_D_IN')->nullable()->comment('Kada pateko į užsigulėjimą');
            $table->dateTime('N17_DUM_D_OUT')->nullable()->comment('Kada iškrito iš išsigulėjimo');
            $table->float('N17_MUITO_PROC', 6)->nullable()->comment('Muito procentas');
            $table->float('N17_AKCIZO_PROC', 6)->nullable()->comment('Akcizo procentas');
            $table->text('N17_PASTABOS')->nullable()->comment('Pastabos');
            $table->boolean('N17_POZ_DATE')->nullable()->comment('Terminuota:0-ne,1-taip');
            $table->dateTime('N17_BEG_DATE')->nullable()->comment('Termino pradžia');
            $table->dateTime('N17_END_DATE')->nullable()->comment('Termino pabaiga');
            $table->string('N17_USERIS', 12)->nullable()->comment('Kas koregavo');
            $table->dateTime('N17_R_DATE')->nullable()->comment('Kada koregavo');
            $table->dateTime('N17_ADD_DATE')->nullable()->comment('Kada sukurta kortelė');
            $table->string('N17_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
            $table->integer('N17_MIN_VISO')->nullable()->comment('Minimumas įmonės mastu');
            $table->string('N17_SERT_POZ', 1)->nullable()->comment('Sertifikavimo požymis');
            $table->string('N17_KAT_POZ', 1)->nullable()->comment('Kategorijos požymis');
            $table->integer('N17_BROK_POZ')->nullable()->comment('Broko požymis');
            $table->string('N17_KODAS_PS_G', 12)->nullable()->comment('Geras prekės kodas');
            $table->dateTime('N17_DATA_BR')->nullable()->comment('Iki kada brokas');
            $table->string('N17_KODAS_VS_T', 12)->nullable()->comment('Šalis tiekėja');
            $table->string('N17_KODAS_MS_A', 12)->nullable()->comment('Analitikas');
            $table->string('N17_KODAS_MS_M', 12)->nullable()->comment('Menedžeris');
            $table->integer('N17_AR_NAUJA')->nullable()->comment('Ar nauja prekė');
            $table->dateTime('N17_DATA_NAUJA')->nullable()->comment('Iki kada nauja');
            $table->float('N17_MIN_ANTK', 6)->nullable()->comment('Minimalus antkainis');
            $table->string('N17_KODAS_LS_5', 12)->nullable()->comment('Logistikos kodas 5');
            $table->string('N17_KODAS_LS_6', 12)->nullable()->comment('Logistikos kodas 6');
            $table->string('N17_KODAS_LS_7', 12)->nullable()->comment('Logistikos kodas 7');
            $table->string('N17_KODAS_LS_8', 12)->nullable()->comment('Logistikos kodas 8');
            $table->float('N17_MIN_ANTK_UR', 6)->nullable()->comment('Minimalus urminių kainų antkainis');
            $table->dateTime('N17_MIN_ANTK_UR_D')->nullable()->comment('Minimalaus urminio antkainio galiojimas');
            $table->float('N17_MAX_ANTK', 6)->nullable()->comment('Maksimalus antkainis');
            $table->integer('N17_SVS_GALIOJA')->nullable()->comment('SVS-e būtina galiojimo data');
            $table->integer('N17_SVS_GALIOJA_D')->nullable()->comment('SVS galiojimo dienos');
            $table->boolean('N17_SVS_PARTIJA')->nullable()->comment('SVS būtina partija: 0-Ne,1-Taip');
            $table->string('N17_PAV_K1', 100)->nullable()->comment('Pavadinimas kita kalba 1');
            $table->string('N17_PAV_K2', 100)->nullable()->comment('Pavadinimas kita kalba 2');
            $table->string('N17_PAV_K3', 100)->nullable()->comment('Pavadinimas kita kalba 3');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('N17_PROD');
    }

}
