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
        Schema::table('users', function (Blueprint $table) {
            $table->text('bio')->nullable()->after('password');
        });
        Schema::create('user_educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('level')->comment('N vel de educa o. Ex: Ensino Fundamental, Ensino M dio, Ensino Superior, P s-Gradua o, Mestrado, Doutorado');
            $table->string('institution')->nullable()->comment('Institui o de ensino');
            $table->string('course')->nullable()->comment('Curso realizado');
            $table->string('start_year')->nullable()->comment('Ano de in cio do curso');
            $table->string('end_year')->nullable()->comment('Ano de conclus o do curso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_educations');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('bio');
        });
    }
};
