<div class="min-h-screen bg-gray-100 p-8">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Produtos</h2>
            {{-- botão de novo produto --}}
            <a href="{{ route('products.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" wire:navigate>
                + Novo Produto
            </a>
        </div>

        {{-- caixa de busca --}}
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <input type="text" wire:model.live="search" placeholder="Buscar produto pelo nome..."
                class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
        </div>

        {{-- tabela de produtos --}}
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Imagem</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Preço
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Ações</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($products as $product)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($product->image)
                                    <img src="{{ Storage::url($product->image) }}" class="h-12 w-12 rounded object-cover">
                                @else
                                    <span class="text-gray-400">Sem foto</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-medium text-gray-900">{{ $product->name }}</div>
                                <div class="text-sm text-gray-500 truncate max-w-xs">{{ $product->description }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">R$ {{ number_format($product->price, 2, ',', '.') }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                {{-- botão editar --}}
                                <a href="{{ route('products.edit', $product) }}"
                                    class="text-indigo-600 hover:text-indigo-900 mr-4" wire:navigate>Editar</a>

                                {{-- botão excluir com confirmação --}}
                                <button wire:click="delete({{ $product->id }})"
                                    wire:confirm="Tem certeza que deseja excluir este produto?"
                                    class="text-red-600 hover:text-red-900">
                                    Excluir
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                                Nenhum produto encontrado.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- paginação --}}
            <div class="p-4 bg-gray-50 border-t border-gray-200">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>