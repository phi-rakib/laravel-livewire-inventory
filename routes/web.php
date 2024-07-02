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
use App\Livewire\DepositCategories\Create as DepositCategoryCreate;
use App\Livewire\DepositCategories\Edit as DepositCategoryEdit;

use App\Livewire\Deposits\Index as DepositIndex;
use App\Livewire\Deposits\Create as DepositCreate;
use App\Livewire\Deposits\Edit as DepositEdit;

use App\Livewire\ExpenseCategories\Index as ExpenseCategoryIndex;
use App\Livewire\ExpenseCategories\Create as ExpenseCategoryCreate;
use App\Livewire\ExpenseCategories\Edit as ExpenseCategoryEdit;

use App\Livewire\Expenses\Index as ExpenseIndex;
use App\Livewire\Expenses\Create as ExpenseCreate;

use App\Livewire\PaymentMethods\Index as PaymentMethodIndex;
use App\Livewire\PaymentMethods\Create as PaymentMethodCreate;
use App\Livewire\PaymentMethods\Edit as PaymentMethodEdit;

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
Route::get('depositCategories/create', DepositCategoryCreate::class)->name('depositCategories.create');
Route::get('depositCategories/edit/{depositCategory}', DepositCategoryEdit::class)->name('depositCategories.edit');

Route::get('deposits', DepositIndex::class)->name('deposits.index');
Route::get('deposits/create', DepositCreate::class)->name('deposits.create');
Route::get('deposits/edit/{deposit}', DepositEdit::class)->name('deposits.edit');

Route::get('paymentMethods', PaymentMethodIndex::class)->name('paymentMethods.index');
Route::get('paymentMethods/create', PaymentMethodCreate::class)->name('paymentMethods.create');
Route::get('paymentMethods/edit/{paymentMethod}', PaymentMethodEdit::class)->name('paymentMethods.edit');

Route::get('expenseCategories', ExpenseCategoryIndex::class)->name('expenseCategories.index');
Route::get('expenseCategories/create', ExpenseCategoryCreate::class)->name('expenseCategories.create');
Route::get('expenseCategories/edit/{expenseCategory}', ExpenseCategoryEdit::class)->name('expenseCategories.edit');

Route::get('expenses', ExpenseIndex::class)->name('expenses.index');
Route::get('expenses/create', ExpenseCreate::class)->name('expenses.create');