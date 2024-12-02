<x-app-layout>
    <div class="py-12" style="background-image: url('{{ asset("image/patas1.png") }}'); ">  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-3 ">
            <div class="flex mx-2">
                @foreach($animais as $animal)  
                    <div class="m-2 flex flex-col items-center">
                        <img class="w-10 h-10 rounded-full border-2 border-[#6C63FF]" src="/image/reproducao.png" alt="">
                        <p class="text-sm ml-1 text-[#6C63FF]">{{$animal->nome}}</p>
                    </div>
                @endforeach
            </div>
          
            <section class="bg-white overflow-hidden shadow-lg sm:rounded-lg p-3">
                <h1>Arquivos de seu pet</h1>
                <div class="flex gap-2 mt-4 p-2 overflow-x-scroll [&::-webkit-scrollbar]:hidden">
                    <a href="#" class="p-1 h-7 border-2 border-[#6C63FF] bg-[#b2aefa] hover:scale-110 transition rounded-lg text-white text-sm" data-filter="all">Todos</a>
                    <a href="#" class="p-1 h-7 border-2 border-[#6C63FF] bg-[#b2aefa] hover:scale-110 transition rounded-lg text-white text-sm" data-filter="carteirinha">Carteirinha</a>
                    <a href="#" class="p-1 h-7 border-2 border-[#6C63FF] bg-[#b2aefa] hover:scale-110 transition rounded-lg text-white text-sm" data-filter="prontuario">Prontuário</a>
                </div>

                <div class="grid sm:grid-cols-3 gap-3 flex-wrap mt-9 redond-md">
                    <!-- Arquivos -->
                    @foreach($aplicacoes as $aplicacao)
                    <div class="mb-6 carteirinha">
                        <p class="text-sm text-slate-600 mb-1">{{ \Carbon\Carbon::parse($aplicacao->data_aplicacao)->format('d/m/Y') }}</p>
                        <article class="border p-2">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                <!-- opções -->
                                <div class="flex justify-end items-end w-full">
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                           <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                        
                                        <!-- Dropdown menu -->
                                    <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                              <li>
                                                <a href="{{ route('vacinas') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Abrir arquivo</a>
                                              </li>
                                              <li>
                                                <a href="{{ route('vacina.download', ['id' => $aplicacao->id]) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Baixar arquivo</a>
                                              </li>
                                        </ul>
                                    </div>                                        
                                </div>
                            </div>
                            <p class="mt-2">carteirinha_{{$animal->nome}}</p>
                            <p class="mt-4 text-sm text-slate-500">Adicionado por {{$aplicacao->veterinario->nome}}</p>
                        </article>
                    </div>
                    @endforeach

                    @foreach($prontuarios as $prontuario)
                    <div class="mb-6 prontuario">
                        <p class="text-sm text-slate-600 mb-1">{{ \Carbon\Carbon::parse($prontuario->data_prontuario)->format('d/m/Y') }}</p>
                        <article class="border p-2">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                <!-- opções -->
                                <div class="flex justify-end items-end w-full">
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                           <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>
                                        
                                        <!-- Dropdown menu -->
                                    <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                              <li>
                                                <a href="{{ route('prontuario') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Abrir arquivo</a>
                                              </li>
                                              <li>
                                                <a href="{{ route('prontuario.download', ['id' => $prontuario->id]) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Baixar arquivo</a>
                                              </li>
                                        </ul>
                                    </div>                                        
                                </div>
                            </div>
                            <p class="mt-2">prontuario_{{$animal->nome}}</p>
                            <p class="mt-4 text-sm text-slate-500">Adicionado por {{$prontuario->veterinario->nome}}</p>
                        </article>
                    </div>
                    @endforeach
                </div>
            </section>   
        </div>
    </div>  
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterButtons = document.querySelectorAll('a[data-filter]');
        const items = document.querySelectorAll('div.mb-6');

        filterButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const filter = this.getAttribute('data-filter');
                items.forEach(item => {
                    if (filter === 'all') {
                        item.style.display = 'block';
                    } else {
                        item.style.display = item.classList.contains(filter) ? 'block' : 'none';
                    }
                });
            });
        });
    });
</script>
</x-app-layout>