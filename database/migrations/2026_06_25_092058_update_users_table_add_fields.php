<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'nom');
            $table->renameColumn('email', 'mail');
            $table->string('phone')->nullable()->after('mail');
            $table->string('num_cni')->nullable()->after('phone');
            $table->string('adresse')->nullable()->after('num_cni');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone', 'num_cni', 'adresse']);
            $table->renameColumn('mail', 'email');
            $table->renameColumn('nom', 'name');
        });
    }
};
