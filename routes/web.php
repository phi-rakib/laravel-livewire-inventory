<?php

use App\Livewire\Accounts\Index as AccountIndex;
use App\Livewire\Accounts\Create as AccountCreate;
use App\Livewire\Accounts\Edit as AccountEdit;

use App\Livewire\Brands\Index as BrandIndex;
use App\Livewire\Brands\Create as BrandCreate;
use App\Livewire\Brands\Edit as BrandEdit;

use App\Livewire\Products\Create as ProductCreate;
use App\Livewire\Products\Edit as ProductEdit;
use App\Livewire\Products\Index as ProductIndex;

use App\Livewire\Categories\Index as CategoryIndex;
use App\Livewire\Categories\Create as CategoryCreate;
use App\Livewire\Categories\Edit as CategoryEdit;

use App\Livewire\DepositCategories\Index as DepositCategoryIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', ProductIndex::class)->name('products.index');
Route::get('products/create', ProductCreate::class)->name('products.create');
Route::get('products/edit/{id}', ProductEdit::class)->name('products.edit');

Route::get('brands', BrandIndex::class)->name('brands.index');
Route::get('brands/create', BrandCreate::class)->name('brands.create');
Route::get('brands/edit/{id}', BrandEdit::class)->name('brands.edit');

Route::get('categories', CategoryIndex::class)->name('categories.index');
Route::get('categories/create', CategoryCreate::class)->name('categories.create');
Route::get('categories/edit/{id}', CategoryEdit::class)->name('categories.edit');

Route::get('accounts', AccountIndex::class)->name('accounts.index');
Route::get('accounts/create', AccountCreate::class)->name('accounts.create');
Route::get('accounts/edit/{id}', AccountEdit::class)->name('accounts.edit');

Route::get('depositCategories', DepositCategoryIndex::class)->name('depositCategories.index');
