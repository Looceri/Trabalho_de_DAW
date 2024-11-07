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
        Schema::create('user_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->comment('Usuário');
            $table->foreignId('languages_id')->constrained('languages')->onDelete('cascade')->comment('Idioma');
            $table->boolean('native_language')->default(false)->comment('Se o idioma é nativo');
            $table->enum('speach_level', ['beginner', 'intermedium', 'professional'])->comment('Nível de fala');
            $table->enum('writing_level', ['beginner', 'intermedium', 'professional'])->comment('Nível de escrita');
            $table->date('learning_since')->comment('Data de início do aprendizado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_languages');
    }
};
