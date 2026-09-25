<?php

use App\Http\Controllers\Api\CategoryRoleController;
use App\Http\Controllers\Api\CertificationController;
use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\ExperiencesController;
use App\Http\Controllers\Api\ProfilController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\SkillController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('project/{slug}', [ProjectController::class, 'show']);
Route::get('projects/related/{category_role_id}', [ProjectController::class, 'relatedProjects']);

Route::get('Certification/{slug}', [CertificationController::class, 'show']);

Route::get('profil', [ProfilController::class, 'index']);

Route::get('projects', [ProjectController::class, 'index']);

Route::get('skill', [SkillController::class, 'index']);

Route::get('Certification', [CertificationController::class, 'index']);

Route::get('education', [EducationController::class, 'index']);

Route::get('experiences', [ExperiencesController::class, 'index']);

Route::get('category_role', [CategoryRoleController::class, 'index']);

use App\Http\Controllers\Api\ContactController;

Route::post('/contact', [ContactController::class, 'store']);
