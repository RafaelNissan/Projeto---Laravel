<?php

namespace App\Livewire\Products;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads; // para upload de arquivos
use App\Models\Product; // model do produto

#[Layout('layouts.app')]
#[Title('Novo Produto')]
class Create extends Component
{
    use WithFileUploads; // ativa o upload

    //* campos do formulário
    public $name = '';
    public $description = '';
    public $price = '';
    public $image;

    public function save()
    {
        //* 1. validação
        $this->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:1024', // opcional, tem que ser imagem, max 1MB
        ]);

        //* 2. upload da imagem (se tiver)
        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('products', 'public'); // salva na pasta 'products' dentro de 'public'
        }

        //* 3. salva no banco
        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $imagePath,
        ]);

        //* 4. volta pra lista
        return $this->redirect('/products', navigate: true);
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
