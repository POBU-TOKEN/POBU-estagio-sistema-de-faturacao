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
        Schema::create('reserva_ons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number');
            $table->string('number_of_contribuethor');
            $table->string('address');
            $table->string('email');
            $table->string('country');
            $table->date('was_born');
            $table->date('check_out_date');
            $table->text('description');
            $table->string('sex');
            $table->string('document');
            $table->string('host_type');
            $table->string('people');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva_ons');
    }
};
