<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.app')] // define qual layout usar
#[Title('Login')] // título da aba do navegador
class Login extends Component
{
    // variáveis que vão aparecer no HTML
    public $email = '';
    public $password = '';

    // função que roda quando clica em "Entrar"
    public function login()
    {
        // valida se preencheu certo
        $credentials = $this->validate([
            'email' => 'required|email', // tem que ter email válido
            'password' => 'required',    // tem que ter senha
        ]);

        // tenta fazer login
        if (Auth::attempt($credentials)) {
            // renova a sessão (segurança)
            session()->regenerate();

            // manda pro dashboard
            return $this->redirect('/dashboard', navigate: true);
        }

        // se deu errado, mostra mensagem
        $this->addError('email', 'As credenciais fornecidas não conferem com nossos registros.');
    }

    public function render()
    {
        return view('livewire.login');
    }
}