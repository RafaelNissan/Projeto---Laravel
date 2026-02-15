<div class="flex items-center justify-center min-h-screen bg-gray-100">
    {{-- flex items-center justify-center = centraliza tudo no meio da tela --}}
    {{-- min-h-screen = ocupa a altura toda da tela --}}
    
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
        {{-- max-w-md = largura máxima média --}}
        {{-- p-8 = espaçamento interno --}}
        {{-- rounded-lg = bordas arredondadas --}}
        {{-- shadow-md = sombra --}}
        
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-800">Crie sua conta</h2>

        <form wire:submit="register">
            {{-- wire:submit="register" = quando enviar, chama register() no PHP --}}
            
            {{-- campo nome --}}
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Nome</label>
                <input type="text" wire:model="name"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror">
                {{-- w-full = largura 100% --}}
                {{-- px-3 py-2 = espaçamento interno horizontal e vertical --}}
                {{-- @error('name') border-red-500 @enderror = se tiver erro, borda fica vermelha --}}
                
                {{-- span que mostra a mensagem de erro --}}
                @error('name') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
                {{-- text-xs = texto extra pequeno --}}
                {{-- italic = texto em itálico --}}
                {{-- text-red-500 = cor vermelha --}}
            </div>

            {{-- CAMPO EMAIL --}}
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Email</label>
                <input type="email" wire:model="email"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror">
                @error('email') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
            </div>

            {{-- CAMPO SENHA --}}
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Senha</label>
                <input type="password" wire:model="password"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror">
                @error('password') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
            </div>

            {{-- CONFIRMAR SENHA --}}
            <div class="mb-6">
                {{-- mb-6 = margem embaixo maior que os outros campos --}}
                <label class="block mb-2 text-sm font-bold text-gray-700">Confirmar Senha</label>
                <input type="password" wire:model="password_confirmation"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            </div>

            {{-- ÁREA DOS BOTÕES --}}
            <div class="flex flex-col gap-4">
                {{-- flex flex-col = empilha os itens na vertical --}}
                {{-- gap-4 = espaçamento entre os itens --}}
                
                <button type="submit"
                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                    {{-- hover:bg-blue-700 = fica mais escuro quando passa o mouse --}}
                    {{-- focus:outline-none = remove a borda padrão quando clica --}}
                    
                    {{-- span que mostra "Cadastrar" quando NÃO está carregando --}}
                    <span wire:loading.remove wire:target="register">Cadastrar</span>
                    {{-- wire:loading.remove = some quando está carregando --}}
                    
                    {{-- span que mostra "Criando conta..." quando está carregando --}}
                    <span wire:loading wire:target="register">Criando conta...</span>
                    {{-- wire:loading = só aparece quando está carregando --}}
                    {{-- wire:target="register" = observa a função register() --}}
                </button>

                {{-- LINK PARA IR PRO LOGIN --}}
                <div class="text-center text-sm">
                    Já tem uma conta?
                    <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-800 font-bold" wire:navigate>
                        {{-- wire:navigate = navegação sem recarregar a página --}}
                        Faça login
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>