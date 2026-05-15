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
        Schema::create('projects', function (Blueprint $row) {
            $row->id();
            $row->string('title');
            $row->text('description');
            $row->json('technology')->nullable();
            $row->string('link')->nullable();
            $row->string('github_link')->nullable();
            $row->date('date')->nullable();
            $row->boolean('is_featured')->default(false);
            $row->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
