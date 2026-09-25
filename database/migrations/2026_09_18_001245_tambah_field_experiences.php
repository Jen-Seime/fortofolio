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
        Schema::table('education', function (Blueprint $table) {

            $table->decimal('gpa', 2, 1);
            $table->string('coursework');
            // id: 1,
            // degree: "S1 Informatika",
            // institution: "Universitas Andi Djemma",
            // period: "2021 — Sekarang",
            // status: "Sedang Berjalan",
            // gpa: "3.80",
            // description:
            // "Mempelajari dasar-dasar ilmu komputer, algoritma, struktur data, dan pengembangan perangkat lunak modern dengan fokus pada web development.",
            // coursework: [
            // "Algoritma & Struktur Data",
            // "Basis Data",
            // "Pemrograman Web",
            // "Rekayasa Perangkat Lunak",
            // "Jaringan Komputer",
            // "Kecerdasan Buatan",
            // ],
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('education', function (Blueprint $table) {
            $table->dropColumn(['coursework', 'gpa']);
        });
    }
};
