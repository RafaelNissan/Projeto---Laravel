<?php

namespace App\Livewire\Products;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination; // paginação
use App\Models\Product; // model do produto

#[Layout('layouts.app')]
#[Title('Produtos')]
class Index extends Component
{
    use WithPagination; //* ativa paginação

    //* campo de busca
    public $search = '';

    //* deletar produto
    public function delete($id)
    {
        Product::find($id)->delete();
    }

    //* desenha a tela
    //* busca produtos pelo nome (se tiver busca)
    public function render()
    {
        $products = Product::where('name', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate(10); //? 10 por página

        return view('livewire.products.index', [
            'products' => $products
        ]);
    }
}
