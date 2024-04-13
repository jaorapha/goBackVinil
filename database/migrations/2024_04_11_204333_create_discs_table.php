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
        Schema::create('discs', function (Blueprint $table) {
            $table->id();
            $table->string('album_name',60);
            $table->bigInteger('amount');
            $table->string('author', 60);
            $table->timestampsTz(precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disc');
    }
};
