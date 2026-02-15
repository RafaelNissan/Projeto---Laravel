<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

#[Layout('layouts.app')]
#[Title('Cadastro')]
class Register extends Component
{
    //* Propriedades do formulário
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = ''; //* Para confirmar a senha

    public function register()
    {
        //* Validação
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users', //* verifica se já existe
            'password' => 'required|min:6|confirmed', //* precisa confirmar a senha
        ]);

        //* Criação do Usuário
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password), //* criptografa a senha
        ]);

        //* loga direto
        Auth::login($user);

        //* Redirecionamento
        return $this->redirect('/dashboard', navigate: true);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
