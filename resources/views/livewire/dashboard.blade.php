<div class="min-h-screen bg-gray-100 p-8">
    {{-- caixa principal branca --}}
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-8">

        {{-- mensagem de boas-vindas --}}
        <h1 class="text-3xl font-bold text-gray-800 mb-4">
            Olá, {{ auth()->user()->name }}! 👋
        </h1>

        <p class="text-gray-600 mb-8">
            Você entrou na área segura (Dashboard). Se você está vendo isso, parabéns! O middleware de autenticação
            deixou você passar.
        </p>

        {{-- cards de exemplo --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-blue-50 p-6 rounded-lg border border-blue-100">
                <h3 class="font-bold text-blue-700">Seus Pedidos</h3>
                <p class="text-sm text-blue-600">0 pedidos recentes</p>
            </div>
            <div class="bg-green-50 p-6 rounded-lg border border-green-100">
                <h3 class="font-bold text-green-700">Saldo</h3>
                <p class="text-sm text-green-600">R$ 0,00</p>
            </div>
            <div class="bg-purple-50 p-6 rounded-lg border border-purple-100">
                <h3 class="font-bold text-purple-700">Mensagens</h3>
                <p class="text-sm text-purple-600">Nenhuma mensagem nova</p>
            </div>
        </div>

        {{-- botão de sair (logout) --}}
        <div class="flex justify-between items-center pt-8 border-t border-gray-100">
            <a href="/" class="text-gray-500 hover:text-gray-700 font-bold text-sm">
                &larr; Voltar para a Home
            </a>

            <button wire:click="logout" class="bg-red-50 text-red-600 px-4 py-2 rounded-lg hover:bg-red-100 font-bold transition-colors">
                Sair da Conta
            </button>
        </div>
    </div>
</div>