<?php

use App\Livewire\Products\Create as ProductCreate;
use App\Livewire\Products\Edit as ProductEdit;
use App\Livewire\Products\Index as ProductIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', ProductIndex::class)->name('products.index');
Route::get('products/create', ProductCreate::class)->name('products.create');
Route::get('products/edit/{id}', ProductEdit::class)->name('products.edit');
