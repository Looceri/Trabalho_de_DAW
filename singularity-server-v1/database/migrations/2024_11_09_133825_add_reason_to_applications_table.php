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
        Schema::table('applications', function (Blueprint $table) {
            // Adiciona a coluna 'reason' após a coluna 'status'
            $table->string('reason')->nullable()->after('status')->comment('Motivo da candidatura');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            // Remove a coluna 'reason' caso a migration seja revertida
            $table->dropColumn('reason');
        });
    }
};
