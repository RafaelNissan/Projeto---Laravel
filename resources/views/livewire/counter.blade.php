<!-- tela do contador -->

<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-purple-500 to-pink-500">
    
    <!-- card branco -->
    <div class="bg-white rounded-lg shadow-2xl p-8 max-w-md w-full" 
         x-data="{ show: false }"
         x-init="setTimeout(() => show = true, 100)">
        
        <!-- título -->
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">
            Contador Livewire + Alpine.js
        </h1>

        <!-- número grande -->
        <div class="..." x-show="show" x-transition...>
            <p class="text-6xl font-bold text-white text-center">
                {{ $count }}
            </p>
        </div>

        <!-- botões -->
        <div class="flex gap-4">
            <!-- botão de diminuir -->
            <button wire:click="decrement" class="...">
                - Decrementar
            </button>

            <!-- botão de aumentar -->
            <button wire:click="increment" class="...">
                + Incrementar
            </button>
        </div>

        <!-- rodapé -->
        <div class="mt-6 text-center text-gray-600 text-sm">
            <p>✨ Powered by Laravel, Livewire, Alpine.js & TailwindCSS</p>
        </div>
    </div>
</div>