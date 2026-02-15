<?php

namespace App\Livewire\Products;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use Illuminate\Support\Facades\Storage; //* para apagar a foto antiga

#[Layout('layouts.app')]
#[Title('Editar Produto')]
class Edit extends Component
{
    use WithFileUploads;

    public Product $product; //* guarda o produto original

    public $name = '';
    public $description = '';
    public $price = '';
    public $image; //* nova imagem (se for trocar)

    //* carrega os dados quando abre a página
    public function mount(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
    }

    public function update()
    {
        //* validação
        $this->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:1024',
        ]);

        //* atualiza os dados
        $data = [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ];

        //* troca a imagem (se enviou uma nova)
        if ($this->image) {
            //* apaga a antiga se tiver
            if ($this->product->image) {
                Storage::disk('public')->delete($this->product->image);
            }

            //* salva a nova
            $data['image'] = $this->image->store('products', 'public');
        }

        //* salva no banco
        $this->product->update($data);

        //* volta pra lista
        return $this->redirect('/products', navigate: true);
    }

    public function render()
    {
        return view('livewire.products.edit');
    }
}
