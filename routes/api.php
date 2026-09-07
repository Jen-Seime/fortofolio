<?php

use App\Http\Controllers\Api\CertificationController;
use App\Http\Controllers\Api\ProfilController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\SkillController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('profil', [ProfilController::class, 'index']);

Route::get('projects', [ProjectController::class, 'index']);

Route::get('skill', [SkillController::class, 'index']);

Route::get('Certification',[CertificationController::class, 'index']);
