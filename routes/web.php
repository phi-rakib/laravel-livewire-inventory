<?php

use App\Livewire\Brands\Index as BrandIndex;
use App\Livewire\Brands\Create as BrandCreate;
use App\Livewire\Brands\Edit as BrandEdit;

use App\Livewire\Products\Create as ProductCreate;
use App\Livewire\Products\Edit as ProductEdit;
use App\Livewire\Products\Index as ProductIndex;

use App\Livewire\Categories\Index as CategoryIndex;
use App\Livewire\Categories\Create as CategoryCreate;

use Illuminate\Support\Facades\Route;

Route::get('/', ProductIndex::class)->name('products.index');
Route::get('products/create', ProductCreate::class)->name('products.create');
Route::get('products/edit/{id}', ProductEdit::class)->name('products.edit');

Route::get('brands', BrandIndex::class)->name('brands.index');
Route::get('brands/create', BrandCreate::class)->name('brands.create');
Route::get('brands/edit/{id}', BrandEdit::class)->name('brands.edit');

Route::get('categories', CategoryIndex::class)->name('categories.index');
Route::get('categories/create', CategoryCreate::class)->name('categories.create');
