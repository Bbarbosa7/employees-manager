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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->integer('salary');
            $table->string('email');
            $table->integer('phone')->unique('phone_unique');
            $table->string('address');
            $table->string('neighborhood');
            $table->string('city')->default('São Mateus');
            $table->string('state')->default('ES');
            $table->string('zip');
            $table->string('country')->default('BR');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
