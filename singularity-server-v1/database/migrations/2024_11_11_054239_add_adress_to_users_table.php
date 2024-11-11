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
        Schema::table('users', function (Blueprint $table) {
            $table->string('address')->nullable()->comment('Endere o do usu rio');
            $table->enum('province', [
                'Cabo Delgado',
                'Gaza',
                'Inhambane',
                'Manica',
                'Maputo Cidade',
                'Maputo Província',
                'Nampula',
                'Niassa',
                'Sofala',
                'Tete',
                'Zambézia'
            ])->nullable()->comment('Província do usuário');
            $table->dropColumn('bio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('province');
            $table->text('bio')->nullable()->after('password');
        });
    }
};
