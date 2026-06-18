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
        Schema::create('Secretaire',function(Blueprint $table)
        {
        $table->id();
        $table->string('nom');
        $table->string('mail');
        $table->string('phone');
        $table->string('adresse');
        $table->string('num_cni');
        $table->string('password');
        $table->timestamps();
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
