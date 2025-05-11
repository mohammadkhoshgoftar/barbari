<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('waybills', function (Blueprint $table) {
            $table->unsignedBigInteger('rent_cost')->default(0);
            $table->unsignedBigInteger('labor_cost')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('waybills', function (Blueprint $table) {
            $table->dropColumn('rent_cost');
            $table->dropColumn('labor_cost');
        });
    }
};