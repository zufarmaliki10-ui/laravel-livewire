<?php

use Illuminate\Support\Facades\Route;

// posts index
Route::livewire('/', 'pages::posts.index')->name('posts.index');
