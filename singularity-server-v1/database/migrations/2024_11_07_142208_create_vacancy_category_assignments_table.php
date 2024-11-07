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
        Schema::create('vacancy_category_assignments', function (Blueprint $table) {
            $table->foreignId('vacancy_id')->constrained('vacancies')->onDelete('cascade')->comment('Vaga associada');
            $table->foreignId('vacancy_category_id')->constrained('vacancy_categories')->onDelete('cascade')->comment('Categoria associada');
            $table->timestamps();

            $table->primary(['vacancy_id', 'vacancy_category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancy_category_assignments');
    }
};
