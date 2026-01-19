<!-- home.blade.php - Página inicial da loja -->

<div class="min-h-screen">
    
    {{-- TOPO DA PÁGINA --}}
    <header class="bg-white border-b border-gray-100 sticky top-0 z-50">
        {{-- sticky top-0 = gruda no topo --}}
        {{-- z-50 = fica por cima --}}
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                {{-- Logo --}}
                <div class="flex items-center gap-2">
                    <div class="bg-blue-600 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <span class="text-2xl font-bold tracking-tight text-gray-900">TechStore</span>
                </div>

                {{-- Campo de busca (some no celular) --}}
                <div class="hidden md:flex flex-1 max-w-lg mx-8">
                    <div class="relative w-full">
                        <input type="text" 
                               class="w-full bg-gray-50 border-none rounded-xl py-3 pl-12 pr-4 text-sm focus:ring-2 focus:ring-blue-500 transition-all font-medium" 
                               placeholder="Procurar por celulares, notebooks, acessórios...">
                        {{-- ícone de lupa --}}
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Botões do lado direito --}}
                <div class="flex items-center gap-2 md:gap-6">
                    {{-- Favoritos --}}
                    <button class="hidden sm:block text-gray-600 hover:text-blue-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                    
                    {{-- Carrinho --}}
                    <button class="relative text-gray-600 hover:text-blue-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        {{-- bolinha com número --}}
                        <span class="absolute -top-2 -right-2 bg-blue-600 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full flex items-center justify-center min-w-[20px] shadow-sm">
                            2
                        </span>
                    </button>
                    
                    {{-- Botão de login --}}
                    <a href="{{ route('login') }}" wire:navigate class="bg-gray-100 p-2 rounded-full text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-all border-2 border-transparent hover:border-blue-100 block">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        {{-- Menu de navegação --}}
        <nav class="bg-white border-t border-gray-50 overflow-x-auto whitespace-nowrap scrollbar-hide shadow-sm shadow-gray-100/50">
            <div class="max-w-7xl mx-auto px-4 flex gap-8 py-4 text-xs md:text-sm font-semibold text-gray-500">
                <a href="#" class="text-blue-600 border-b-2 border-blue-600 pb-1">Novos produtos</a>
                <a href="#" class="hover:text-blue-600 transition-colors pb-1">Celulares</a>
                <a href="#" class="hover:text-blue-600 transition-colors pb-1">Tablets</a>
                <a href="#" class="hover:text-blue-600 transition-colors pb-1">Notebooks</a>
                <a href="#" class="hover:text-blue-600 transition-colors pb-1">Audio</a>
                <a href="#" class="hover:text-blue-600 transition-colors pb-1">Acessórios</a>
                {{-- ofertas piscando --}}
                <div class="ml-auto text-red-500 flex items-center gap-1 animate-pulse">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    Flash Deals
                </div>
            </div>
        </nav>
    </header>

    {{-- BANNER GRANDE --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="relative overflow-hidden rounded-[2rem] bg-[#0b101b] min-h-[400px] md:min-h-[550px] flex items-center group">
            
            {{-- texto do lado esquerdo --}}
            <div class="relative z-10 pl-8 md:pl-20 max-w-xl pr-8">
                
                <span class="bg-blue-600/20 text-blue-400 text-[10px] md:text-xs font-bold tracking-widest px-4 py-1.5 rounded-full uppercase border border-blue-500/20">Novos produtos</span>
                
                <h1 class="text-4xl md:text-7xl font-extrabold text-white mt-6 mb-4 tracking-tight leading-tight">
                    O futuro está <span class="text-blue-500">aqui.</span>
                </h1>
                
                <p class="text-gray-400 text-sm md:text-lg mb-10 leading-relaxed max-w-md">
                    Experimente a nova geração de inovação com o Galaxy S24 Series. IA mais inteligente, câmera melhor e bateria toda dia.
                </p>
                
                {{-- botões --}}
                <div class="flex flex-wrap gap-4">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 md:py-4 px-8 md:px-10 rounded-xl transition-all flex items-center gap-2 group shadow-xl shadow-blue-500/20 active:scale-95">
                        Comprar agora
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                    <button class="bg-white/5 hover:bg-white/10 text-white font-bold py-3 md:py-4 px-8 md:px-10 rounded-xl transition-all backdrop-blur-md border border-white/10 active:scale-95">
                        Mais informações
                    </button>
                </div>
            </div>

            {{-- imagem de fundo --}}
            <div class="absolute right-0 top-0 bottom-0 w-full md:w-1/2 pointer-events-none">
                <img src="https://images.unsplash.com/photo-1678911820864-e2c567c65ed0?auto=format&fit=crop&q=80&w=1000" 
                     alt="S24 Series" 
                     class="w-full h-full object-cover opacity-60 md:opacity-80 transition-transform duration-1000 group-hover:scale-105" 
                     style="mask-image: linear-gradient(to right, transparent, black); -webkit-mask-image: linear-gradient(to right, transparent, black);">
                
                {{-- camada escura por cima --}}
                <div class="absolute inset-0 bg-gradient-to-r from-[#0b101b] via-[#0b101b]/80 to-transparent"></div>
            </div>

            {{-- bolinhas do slider --}}
            <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex gap-3">
                <button class="w-12 h-1.5 bg-blue-600 rounded-full transition-all"></button>
                <button class="w-4 h-1.5 bg-gray-600 hover:bg-gray-400 rounded-full transition-all"></button>
                <button class="w-4 h-1.5 bg-gray-600 hover:bg-gray-400 rounded-full transition-all"></button>
            </div>
        </div>
    </section>

    {{-- VANTAGENS DA LOJA --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 bg-white p-6 md:p-10 rounded-[2rem] shadow-sm border border-gray-100">
            
            {{-- frete grátis --}}
            <div class="flex items-center gap-4">
                <div class="bg-blue-50 p-4 rounded-2xl text-blue-600 shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-sm md:text-base tracking-tight">Frete grátis</h3>
                    <p class="text-[10px] md:text-xs text-gray-400 font-medium">Pedidos acima de R$50</p>
                </div>
            </div>
            
            {{-- pagamento seguro --}}
            <div class="flex items-center gap-4 border-l border-gray-50 md:pl-8">
                <div class="bg-green-50 p-4 rounded-2xl text-green-600 shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-sm md:text-base tracking-tight">Pagamento seguro</h3>
                    <p class="text-[10px] md:text-xs text-gray-400 font-medium">100% protegido</p>
                </div>
            </div>
            
            {{-- trocas --}}
            <div class="flex items-center gap-4 border-l border-gray-50 md:pl-8">
                <div class="bg-purple-50 p-4 rounded-2xl text-purple-600 shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4 2 4-2 4 2z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-sm md:text-base tracking-tight">Trocas e devoluções</h3>
                    <p class="text-[10px] md:text-xs text-gray-400 font-medium">30 dias</p>
                </div>
            </div>
            
            {{-- suporte --}}
            <div class="flex items-center gap-4 border-l border-gray-50 md:pl-8">
                <div class="bg-orange-50 p-4 rounded-2xl text-orange-600 shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-sm md:text-base tracking-tight">Suporte 24/7</h3>
                    <p class="text-[10px] md:text-xs text-gray-400 font-medium">Ajuda especializada</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CATEGORIAS --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight">Categorias de produto</h2>
                <div class="h-1.5 w-20 bg-blue-600 rounded-full mt-2"></div>
            </div>
            <a href="#" class="text-blue-600 font-bold text-sm hover:translate-x-1 transition-transform inline-flex items-center gap-2">
                Ver todas as categorias
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
        
        {{-- loop das categorias --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-8 md:gap-12">
            @foreach($categories as $category)
                <div class="group cursor-pointer">
                    
                    <div class="relative aspect-square rounded-[2.5rem] overflow-hidden mb-6 bg-white p-4 border-2 border-transparent group-hover:border-blue-100 shadow-sm group-hover:shadow-2xl transition-all duration-500 group-hover:-translate-y-2">
                        
                        <img src="{{ $category['image'] }}" 
                             alt="{{ $category['name'] }}" 
                             class="w-full h-full object-cover rounded-3xl group-hover:scale-110 transition-transform duration-700">
                        
                        {{-- sombra que aparece --}}
                        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                    
                    <h3 class="text-center font-bold text-gray-900 group-hover:text-blue-600 transition-colors tracking-tight">{{ $category['name'] }}</h3>
                </div>
            @endforeach
        </div>
    </section>

    {{-- PRODUTOS EM DESTAQUE --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 bg-white rounded-[3rem] shadow-sm border border-gray-50">
        <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
            <div>
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight text-center md:text-left">Produtos em destaque</h2>
                <p class="text-gray-400 font-medium mt-1 text-center md:text-left">Selecione os itens para você</p>
            </div>
            
            {{-- botões de filtro --}}
            <div class="flex bg-gray-50 border border-gray-100 p-1.5 rounded-2xl">
                <button class="bg-blue-600 text-white px-8 py-3 rounded-xl text-sm font-bold shadow-xl shadow-blue-500/20 transition-all active:scale-95">Todos os itens</button>
                <button class="text-gray-400 px-8 py-3 text-sm font-bold hover:text-gray-900 transition-colors">Melhores vendedores</button>
                <button class="text-gray-400 px-8 py-3 text-sm font-bold hover:text-gray-900 transition-colors">Novos</button>
            </div>
        </div>

        {{-- loop dos produtos --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($products as $product)
                <div class="group bg-white rounded-[2rem] p-4 border border-gray-50 hover:border-blue-50 hover:shadow-2xl transition-all duration-500 relative flex flex-col justify-between">
                    
                    {{-- etiqueta (só mostra se tiver) --}}
                    @if($product['tag'])
                        <span class="absolute top-6 left-6 z-10 {{ $product['tag'] === 'Vendido' ? 'bg-red-500' : 'bg-blue-600' }} text-white text-[10px] font-black px-4 py-1.5 rounded-full shadow-lg">
                            {{ $product['tag'] }}
                        </span>
                    @endif

                    {{-- imagem --}}
                    <div class="aspect-square rounded-3xl overflow-hidden mb-8 bg-gray-50 relative group-hover:bg-blue-50 transition-colors duration-500">
                        <img src="{{ $product['image'] }}" 
                             alt="{{ $product['name'] }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                        
                        <div class="absolute inset-0 bg-blue-600/0 group-hover:bg-blue-600/5 transition-colors"></div>
                        
                        {{-- coração (aparece quando passa o mouse) --}}
                        <button class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-xl p-3 rounded-2xl text-gray-900 opacity-0 group-hover:opacity-100 transition-all translate-y-4 group-hover:translate-y-0 shadow-xl border border-white hover:bg-blue-600 hover:text-white transform transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>

                    {{-- infos do produto --}}
                    <div class="px-2">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-gray-900 text-xl tracking-tight leading-tight group-hover:text-blue-600 transition-colors">
                                {{ $product['name'] }}
                            </h3>
                        </div>
                        <p class="text-gray-400 text-xs font-medium mb-4">{{ $product['description'] }}</p>
                        
                        {{-- estrelinhas --}}
                        <div class="flex items-center gap-1.5 mb-6">
                            <div class="flex text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-3.5 h-3.5 {{ $i < $product['rating'] ? 'fill-current' : 'text-gray-200 fill-current' }}" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            <span class="text-gray-300 text-[10px] font-bold">(128 reviews)</span>
                        </div>

                        {{-- preço e botão --}}
                        <div class="flex justify-between items-center bg-gray-50 rounded-2xl p-4 group-hover:bg-blue-50 transition-colors duration-500">
                            <div>
                                {{-- preço antigo --}}
                                @if($product['old_price'])
                                    <span class="text-gray-400 line-through text-[10px] font-bold block opacity-60">${{ $product['old_price'] }}</span>
                                @endif
                                <span class="text-2xl font-black text-gray-900 tracking-tight">${{ $product['price'] }}</span>
                            </div>
                            
                            {{-- botão de adicionar --}}
                            <button class="bg-blue-600 hover:bg-gray-900 text-white p-3.5 rounded-xl transition-all shadow-xl shadow-blue-500/20 active:scale-90 flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- BANNER DE OFERTAS --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="relative overflow-hidden rounded-[3rem] bg-blue-600 min-h-[350px] flex items-center group">
            <div class="relative z-10 pl-12 md:pl-20 max-w-lg">
                <span class="text-blue-200 text-xs font-black tracking-widest uppercase">Oferta Limitada</span>
                <h2 class="text-4xl md:text-5xl font-black text-white mt-4 mb-6 leading-tight">Ofertas de Natal</h2>
                <p class="text-blue-100 text-lg mb-10 opacity-80 font-medium">Aproveite até 50% de desconto em celulares e notebooks. Ofertas terminam esta semana.</p>
                <button class="bg-white text-blue-600 hover:bg-gray-900 hover:text-white font-bold py-4 px-12 rounded-2xl transition-all shadow-xl transform active:scale-95">
                    Ver Ofertas
                </button>
            </div>
            
            <div class="absolute right-0 top-0 bottom-0 w-full md:w-1/2 overflow-hidden pointer-events-none">
                <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&q=80&w=1000" 
                     class="w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-110 group-hover:rotate-2">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-blue-600/40 to-transparent"></div>
            </div>
        </div>
    </section>

    {{-- RODAPÉ --}}
    <footer class="bg-white pt-24 pb-12 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-20">
                
                {{-- sobre a loja --}}
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-2 mb-8">
                        <div class="bg-blue-600 p-2 rounded-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <span class="text-2xl font-bold tracking-tight text-gray-900">TechStore</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-8">
                        Seu destino ideal para a última tecnologia. Trazemos o futuro para sua porta com eletrônicos e acessórios de qualidade.
                    </p>
                    
                    {{-- redes sociais --}}
                    <div class="flex gap-4">
                        <a href="#" class="bg-gray-50 p-3 rounded-xl text-gray-400 hover:bg-blue-600 hover:text-white transition-all transform hover:-translate-y-1">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="bg-gray-50 p-3 rounded-xl text-gray-400 hover:bg-blue-600 hover:text-white transition-all transform hover:-translate-y-1">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="bg-gray-50 p-3 rounded-xl text-gray-400 hover:bg-blue-600 hover:text-white transition-all transform hover:-translate-y-1">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                        </a>
                    </div>
                </div>

                {{-- links da loja --}}
                <div>
                    <h4 class="text-gray-900 font-bold mb-8 uppercase tracking-widest text-xs">Shop</h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Celulares</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Tablets</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Notebooks</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Acessórios</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Ofertas</a></li>
                    </ul>
                </div>

                {{-- suporte --}}
                <div>
                    <h4 class="text-gray-900 font-bold mb-8 uppercase tracking-widest text-xs">Suporte</h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Contato</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">FAQs</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Informações de envio</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Devoluções</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Order Status</a></li>
                    </ul>
                </div>

                {{-- newsletter --}}
                <div>
                    <h4 class="text-gray-900 font-bold mb-8 uppercase tracking-widest text-xs">Stay Updated</h4>
                    <p class="text-gray-400 text-sm mb-6 font-medium">Se inscreva para receber as últimas notícias e promoções.</p>
                    <div class="flex flex-col gap-3">
                        <input type="email" 
                               placeholder="Insira seu email" 
                               class="bg-gray-50 border-none rounded-xl py-3 px-4 text-sm focus:ring-2 focus:ring-blue-500">
                        <button class="bg-blue-600 hover:bg-gray-900 text-white font-bold py-3 rounded-xl transition-all shadow-xl shadow-blue-500/10">
                            Inscrever-se
                        </button>
                    </div>
                </div>
            </div>

            {{-- copyright --}}
            <div class="pt-12 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-gray-400 text-sm font-medium">© 2026 TechStore. Todos os direitos reservados.</p>
                <div class="flex gap-6">
                    <a href="#" class="text-gray-400 text-xs font-bold hover:text-blue-600 transition-colors">Política de Privacidade</a>
                    <a href="#" class="text-gray-400 text-xs font-bold hover:text-blue-600 transition-colors">Termos de Uso</a>
                    <a href="#" class="text-gray-400 text-xs font-bold hover:text-blue-600 transition-colors">Configurações de Cookies</a>
                </div>
            </div>
        </div>
    </footer>
</div>

{{-- 
Como funciona:
- Home.php prepara as variáveis $categories e $products
- Esse arquivo recebe essas variáveis
- @foreach faz um loop em cada item
- {{ $variavel }} mostra o valor na tela
--}}