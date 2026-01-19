<?php

# O namespace é como se fosse o endereço da minha loja "rua Livewire, numero App"
# Ou seja namespace é o endereço do meu arquivo (app\Livewire\)
namespace App\Livewire;

# Livewire\Component é como se fosse as ferramentas da franquia "Livewire" para montar a minha loja
use Livewire\Component;

# Aqui estou criando a classe "home" que vai herdar os metedos e a funcionalidade da classe Component do proprio Livewire
class Home extends Component
{
    # "public" é uma variavel que pode ser acessada de qualquer lugar

    # "categories" e "products" é uma variavel que vai armazenar arrays (lista) que inicia vazia
    public $categories = [];
    public $products = [];

    # mount()" é um método ESPECIAL do Livewire que executa AUTOMATICAMENTE quando a página é carregada
    public function mount()
    {
        # Simulando dados que viriam do banco de dados futuramente

        # "$this->variavel = valor" significa: estamos especificando a variavel que esta na classe Home que vai receber um valor ou um conteudo
        $this->categories = [
            ['name' => 'Celulares', 'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=200&h=200&fit=crop'],
            ['name' => 'Notebooks', 'image' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=200&h=200&fit=crop'],
            ['name' => 'Tablets', 'image' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=200&h=200&fit=crop'],
            ['name' => 'Audio', 'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&h=200&fit=crop'],
            ['name' => 'Acessórios', 'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=200&h=200&fit=crop'],
            ['name' => 'Gaming', 'image' => 'https://images.unsplash.com/photo-1542751371-adc38448a05e?w=200&h=200&fit=crop'],
        ];

        $this->products = [
            [
                'name' => 'iPhone 14 Pro',
                'description' => '256GB - Space Black',
                'price' => 999,
                'old_price' => 1099,
                'image' => 'https://images.unsplash.com/photo-1673332788244-c68da781898b?w=400&h=400&fit=crop',
                'tag' => 'Vendido',
                'rating' => 5
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'description' => 'Noise Cancelling - Silver',
                'price' => 348,
                'old_price' => null,
                'image' => 'https://images.unsplash.com/photo-1670065314432-6f6788cbc4d1?w=400&h=400&fit=crop',
                'tag' => null,
                'rating' => 5
            ],
            [
                'name' => 'Galaxy Tab S8',
                'description' => '11" Display - Graphite',
                'price' => 899,
                'old_price' => null,
                'image' => 'https://images.unsplash.com/photo-1650367310179-e1b5b8e453c3?w=400&h=400&fit=crop',
                'tag' => 'NEW',
                'rating' => 4
            ],
            [
                'name' => 'Google Pixel 7',
                'description' => '128GB - Obsidian',
                'price' => 599,
                'old_price' => null,
                'image' => 'https://images.unsplash.com/photo-1667462444062-0941dfcb303c?w=400&h=400&fit=crop',
                'tag' => null,
                'rating' => 5
            ],
        ];
    }

    # "render" é uma funcao que vai renderizar a view
    public function render()
    {
        # "view.home" mostre a vitrine da loja que está no arquivo `livewire/home.blade.php', ou seja ele busca o arquivo `resources/views/livewire/home.blade.php`

        # "layout.app" mostre o layout da loja que está no arquivo `layouts/app.blade.php', ou seja ele busca o arquivo `resources/views/layouts/app.blade.php`
        return view('livewire.home')->layout('layouts.app');
    }
}

