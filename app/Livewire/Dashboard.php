<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')] // usa o layout padrão do site
#[Title('Painel do Usuário')] // nome que fica na abinha do navegador
class Dashboard extends Component
{
    // função para sair da conta
    public function logout()
    {
        auth()->logout(); // "desloga" o usuário
        session()->invalidate(); // mata a sessão
        session()->regenerateToken(); // segurança extra

        return $this->redirect('/', navigate: true); // manda pra home
    }

    // essa função é tipo o "pintor" que desenha a tela
    public function render()
    {
        return view('livewire.dashboard');
    }
}
