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
        Schema::create('client_disc', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('amount');
            $table->bigInteger('price');
            $table->unsignedBigInteger('clients_id');
            $table->foreign('clients_id')->references('id')->on('clients');
            $table->unsignedBigInteger('discs_id');
            $table->foreign('discs_id')->references('id')->on('discs');
            $table->timestampsTz(precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_disc');
    }
};
