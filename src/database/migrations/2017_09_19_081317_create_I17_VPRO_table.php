<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateI17VPROTable
 */
class CreateI17VPROTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('I17_VPRO', function (Blueprint $table) {
            $table->integer('count', true);
            $table->string('id', 36)->unique();
            $table->timestamps();
            $table->softDeletes();
            $table->string('I17_KODAS_IS', 12)->nullable()->comment('Padalinio kodas');
            $table->string('I17_KODAS_PS', 12)->nullable()->comment('Prekės kodas');
            $table->string('I17_KODAS_OS', 12)->nullable()->comment('Objekto kodas');
            $table->string('I17_SERIJA', 12)->nullable()->comment('Serija');
            $table->string('I17_KODAS_US_A', 12)->nullable()->comment('Alternatyvaus matavimo vieneto kodas');
            $table->string('I17_KODAS_US', 12)->nullable()->comment('Pagrindinis matavimo vieneto kodas');
            $table->integer('I17_FRAKCIJA')->nullable()->comment('Pagrindinio matavimo vieneto frakcija');
            $table->integer('I17_KIEKIS')->nullable()->comment('FIFO likutis');
            $table->integer('I17_ATIDUOTA')->nullable()->comment('Atiduota');
            $table->integer('I17_REZERVAS')->nullable()->comment('Užrezervuota');
            $table->integer('I17_PARD_UZS')->nullable()->comment('Pirkėjų užsakymai');
            $table->integer('I17_PIRK_UZS')->nullable()->comment('Užsakyta pas tiekėjus');
            $table->float('I17_SUMA', 12)->nullable()->comment('FIFO likučių suma');
            $table->float('I17_P_PIR_K', 12, 4)->nullable()->comment('Paskutinio pirkimo kaina');
            $table->dateTime('I17_P_PIR_D')->nullable()->comment('Paskutinio pirkimo data');
            $table->float('I17_P_PAR_K', 12, 4)->nullable()->comment('Paskutinio pardavimo suma');
            $table->dateTime('I17_P_PAR_D')->nullable()->comment('Paskutinio pardavimo data');
            $table->integer('I17_VID_UZS')->nullable()->comment('Užsakymas iš vidinio padalinio');
            $table->integer('I17_REIKALAVIMAS')->nullable()->comment('Pareikalavimas iš vidinio padalinio');
            $table->integer('I17_KELYJE')->nullable()->comment('Prekės kelyje');
            $table->float('I17_KAINA', 12, 4)->nullable()->comment('Pardavimo kaina objekte');
            $table->string('I17_USERIS', 12)->nullable()->comment('Kas koregavo');
            $table->string('I17_ADDUSR', 12)->nullable()->comment('Kas sukūrė');
            $table->dateTime('I17_R_DATE')->nullable()->comment('Kada koregavo');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('I17_VPRO');
    }

}
