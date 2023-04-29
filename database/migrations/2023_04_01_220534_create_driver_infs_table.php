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
        Schema::create('driver_infs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('phone_number');
            $table->string('city');
            $table->string('address');
            $table->date('date_of_birth');
            $table->string('age')->nullable();
            $table->string('nationality');
            $table->string('national_id')->unique();
            $table->string('emergency_number');
            $table->string('status')->default('stable');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('Created_By')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_infs');
    }
};
