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
        Schema::create('waybills', function (Blueprint $table) {
            $table->id();

            // Sender Info
            $table->string('sender_name');
            $table->string('sender_national_code');
            $table->string('sender_postal_code');
            $table->text('sender_address');

            // Receiver Info
            $table->string('receiver_name');
            $table->string('receiver_national_code');
            $table->string('receiver_postal_code');
            $table->text('receiver_address');

            // Waybill Info
            $table->date('waybill_date');
            $table->time('waybill_time');
            $table->string('waybill_number')->unique();

            // Insurance Info
            $table->string('insurance_contract_number');
            $table->string('insurance_company_name');
            $table->string('insurance_value');

            // Drivers and Cargos Info as JSON
            $table->json('drivers');
            $table->json('cargos');

            // Locations
            $table->string('loading_origin');
            $table->string('unloading_destination');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('waybills');
    }
};
