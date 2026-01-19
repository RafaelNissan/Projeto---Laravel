<?php

// define onde o arquivo está e importa o Livewire
namespace App\Livewire;

use Livewire\Component;

// cria a classe Counter
class Counter extends Component
{
    // variável que começa em 0
    public $count = 0;

    // aumenta o contador
    public function increment()
    {
        $this->count++;
    }

    // diminui o contador
    public function decrement()
    {
        $this->count--;
    }

    // mostra a tela
    public function render()
    {
        return view('livewire.counter');
    }
}