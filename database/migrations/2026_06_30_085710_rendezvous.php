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
        Schema::create('rendez_vous', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visiteur_id')
                  ->constrained('visiteurs')
                  ->onDelete('cascade');
            $table->string('cree_par');
            $table->string('destinataire');
            $table->string('objet');
            $table->date('date');
            $table->time('heure');
            $table->string('nouvelle_date')->nullable();
            $table->string('nouvelle_heure')->nullable();
            $table->enum('status', [
                'en attente',
                'accepter',
                'refuser',
                'reporter'
            ]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez_vous');
    }
};
