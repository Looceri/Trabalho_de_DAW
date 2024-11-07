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
        Schema::create('contacts', function (Blueprint $table) {
            $table->integer('number')->comment('Número de contato');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->comment('Usuário');
            $table->foreignId('country_code')->constrained('countries')->onDelete('cascade')->comment('Código do país');
            $table->timestamps();

            $table->primary(['number', 'user_id','country_code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
