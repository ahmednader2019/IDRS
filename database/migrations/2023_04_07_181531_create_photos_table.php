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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('driver_infs')->cascadeOnDelete();
            $table->string('filename1');
            $table->string('filename2');
            $table->string('filename3');

            // $table->string('personal');
            // $table->string('carLicence');
            // $table->string('driverLicence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
