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
            // We voegen de kolom toe na de 'email' kolom (optioneel, maar netjes)
            // Default is 'false' (0), zodat niet iedereen zomaar admin is.
            $table->boolean('is_admin')->default(false)->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Dit is voor als je de migratie ooit ongedaan wilt maken
            $table->dropColumn('is_admin');
        });
    }
};