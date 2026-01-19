<?php

use App\Livewire\Home;
use App\Livewire\Counter;
use App\Livewire\Login; // Importando o componente de Login
use App\Livewire\Register; // Importando o componente de Register
use App\Livewire\Dashboard; // Importando o Dashboard
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/counter', Counter::class);
Route::get('/login', Login::class)->name('login'); // Definindo a rota de login
Route::get('/register', Register::class)->name('register'); // Definindo a rota de cadastro

// aqui acontece a mágica do porteiro
// o "middleware('auth')" é como se fosse um segurança que só deixa passar quem tem crachá (quem está logado)
// se não tiver logado, ele manda pro login
Route::get('/dashboard', Dashboard::class)->middleware('auth')->name('dashboard');