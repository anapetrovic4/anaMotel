<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('sobas', function (Blueprint $table) {
            $table->renameColumn('broj_ljudi', 'kapacitet');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sobas', function (Blueprint $table) {
            $table->renameColumn('kapacitet', 'broj_ljudi');
        });
    }
};
