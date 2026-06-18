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
        Schema::create('Visiteur',function(Blueprint $table){
            $table->id();
            $table->string('nom');
            $table->string('phone');
            $table->string('objet');
            $table->enum('type_visiteur',['Client','Fournisseur','Partenaire','Autre']);
            $table->date('date');
            $table->time('time');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
