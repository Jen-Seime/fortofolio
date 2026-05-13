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
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('nickname');
            $table->string('role');
            $table->text('bio');
            $table->string('about');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('github');
            $table->string('linkedin');
            $table->string('instagram');
            $table->string('cv_file');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};
