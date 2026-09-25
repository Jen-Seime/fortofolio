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
        Schema::table('experiences', function (Blueprint $table) {
            $table->dropColumn(['company_name', 'position', 'description', 'technology']);

            $table->string('type');
            $table->string('position');       // "Frontend Developer"
            $table->string('company');        // "Project Kampus"
            $table->text('description');
            $table->string('achievements'); // Pencapaian
            $table->string('techStack');    // Teknologi yang digunakan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('experiences', function (Blueprint $table) {

            $table->dropColumn(['title', 'institution', 'description', 'achievements', 'skills']);

            $table->string('company_name');
            $table->string('position');
            $table->text('description');
            $table->string('technology');

        });
    }
};
