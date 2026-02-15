<?php

use App\Livewire\Home;
use App\Livewire\Counter;
use App\Livewire\Login; //* Importando o componente de Login
use App\Livewire\Register; //* Importando o componente de Register
use App\Livewire\Dashboard; //* Importando o Dashboard
use Illuminate\Support\Facades\Route;

//* Página inicial da TechStore
Route::get('/', Home::class);
Route::get('/counter', Counter::class);
Route::get('/login', Login::class)->name('login'); //* Definindo a rota de login
Route::get('/register', Register::class)->name('register'); //* Definindo a rota de cadastro

//* rota do painel, só entra se tiver logado
Route::get('/dashboard', Dashboard::class)->middleware('auth')->name('dashboard');

//* rotas de produtos (também protegidas)
Route::middleware('auth')->group(function () {
    Route::get('/products', App\Livewire\Products\Index::class)->name('products.index'); //* lista
    Route::get('/products/create', App\Livewire\Products\Create::class)->name('products.create'); //* novo
    Route::get('/products/{product}/edit', App\Livewire\Products\Edit::class)->name('products.edit'); //* editar
});