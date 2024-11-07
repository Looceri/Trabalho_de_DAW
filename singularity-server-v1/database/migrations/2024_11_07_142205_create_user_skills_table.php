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
        Schema::create('user_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->comment('Usuário');
            $table->foreignId('skill_id')->constrained('skills')->onDelete('cascade')->comment('Habilidade');
            $table->enum('level', ['beginner', 'intermedium', 'professional'])->comment('Nível de proficiência');
            $table->date('start_of_skill')->comment('Data de início');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_skills');
    }
};
