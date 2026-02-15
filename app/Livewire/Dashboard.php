<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.app')] // *layout padrão
#[Title('Painel do Usuário')] // *título da aba
class Dashboard extends Component
{
    //* função para sair da conta
    public function logout()
    {
        Auth::logout(); //* "desloga" o usuário
        session()->invalidate(); //* mata a sessão
        session()->regenerateToken(); //* segurança extra

        return $this->redirect('/', navigate: true); //* manda pra home
    }

    //* desenha a tela
    public function render()
    {
        return view('livewire.dashboard');
    }
}
