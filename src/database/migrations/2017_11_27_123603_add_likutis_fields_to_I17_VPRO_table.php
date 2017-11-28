<?php

declare(strict_types = 1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class AddLikutisFieldsToI17VPROTable
 */
class AddLikutisFieldsToI17VPROTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('I17_VPRO', function(Blueprint $table) {
            $table->float('likutis_us', 12, 4)->nullable()
                ->comment('Dešimtainis kiekis pagrindiniu matavimo vientetu');
            $table->float('likutis_us_a', 12, 4)->nullable()
                ->comment('Dešimtainis kiekis alternatyviu matavimo vienetu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('I17_VPRO', function(Blueprint $table) {
            $table->dropColumn(['likutis_us', 'likutis_us_a']);
        });
    }
}
