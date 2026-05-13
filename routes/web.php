<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Page\HomePage;


Route::get('/', HomePage::class)->name('home');

