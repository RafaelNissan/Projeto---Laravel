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
    // Propriedades do formulário
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = ''; // Para confirmar a senha

    public function register()
    {
        // 1. Validação
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users', // unique:users verifica se já existe no banco
            'password' => 'required|min:6|confirmed', // confirmed procura por um campo password_confirmation
        ]);

        // 2. Criação do Usuário
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password), // Criptografa a senha
        ]);

        // 3. Login Automático
        Auth::login($user);

        // 4. Redirecionamento
        return $this->redirect('/dashboard', navigate: true);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
