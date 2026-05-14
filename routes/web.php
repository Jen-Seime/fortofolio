<?php

use App\Livewire\Page\AboutPage;
use App\Livewire\Page\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/about', AboutPage::class)->name('about');
