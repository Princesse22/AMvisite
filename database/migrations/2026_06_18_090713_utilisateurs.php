<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('utilisateurs', function (Blueprint $table) {

            $table->id();
            $table->string('nom');
            $table->string('mail');
            $table->string('phone');
            $table->string('adresse');
            $table->string('num_cni');
            $table->enum('service', ['secretaire', 'responsable', 'admin']);
            $table->string('password');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
