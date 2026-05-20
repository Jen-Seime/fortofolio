<?php

use App\Livewire\Component\CertificationDetail;
use App\Livewire\Component\ProjectDetail;
use App\Livewire\Page\AboutPage;
use App\Livewire\Page\CertificationPage;
use App\Livewire\Page\ContactPage;
use App\Livewire\Page\HomePage;
use App\Livewire\Page\ProjectPage;
use App\Livewire\Page\SkillPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/about', AboutPage::class)->name('about');
Route::get('/skill', SkillPage::class)->name('skill');
Route::get('/project', ProjectPage::class)->name('project');
Route::get('/project/{project:slug}', ProjectDetail::class)->name('project.detail');
Route::get('/certification', CertificationPage::class)->name('certification');
Route::get('/certification/{certification:slug}', CertificationDetail::class)->name('certification.detail');

Route::get('/contact', ContactPage::class)->name('contact');
