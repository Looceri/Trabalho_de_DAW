<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Adiciona coluna birth_date na tabela users
        // Armazena a data de nascimento do usu rio
        // O campo   nulo por padr o
        Schema::table('users', function (Blueprint $table) {
            $table->date('birth_date')->nullable()->after('password')->comment('Data de nascimento do usu rio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('birth_date');
        });
    }
};
