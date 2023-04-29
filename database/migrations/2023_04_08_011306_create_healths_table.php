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
        Schema::create('healths', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('driver_infs')->cascadeOnDelete();
            $table->string('pressure');
            $table->string('diabetes');
            $table->string('blood');
            $table->string('diseases');
            $table->string('diseases_details')->nullable();
            $table->string('surgeries');
            $table->string('surgeries_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('healths');
    }
};
