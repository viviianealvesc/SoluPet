<x-app-layout>
    <div class="py-12" style="background-image: url('{{ asset("image/patas1.png") }}'); ">  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-3 ">
            <div class="flex mx-2">
                <div>
                    <img class="w-10 h-10 me-4 rounded-full border-2 border-[#6C63FF]" src="/image/reproducao.png" alt="">
                    <p class="text-sm ml-1 text-[#6C63FF]">Zoe</p>
                </div>
            </div>

                <!-- Lembretes -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-3 ">
               <div class="flex justify-between items-center">
                <p class=" text-semibold">Lembretes</p>
                <a href="{{ route('lembrete') }}" class="bg-[#6C63FF] hover:bg-[#867ffe] hover:scale-110 transition text-sm text-white p-1 shadow-md rounded-lg mt-2" >Adicionar lembretes</a>
               </div>
                <section class="grid sm:grid-cols-3 gap-2 bg-white overflow-hidden shadow-lg sm:rounded-lg p-3">  
                    <div class="border rounded-lg mt-2 shadow-lg">
                        <p class="text-sm bg-[#6C63FF] rounded-t-lg text-white p-1">Banho e/ou tosa</p>
                        <p class="mt-2 text-sm text-slate-600 pl-1"><span class="text-bold text-sm">Dia:</span> 30 de agosto</p>
                        <p class="mt-2 text-sm text-slate-600 pl-1"><span class="text-bold text-sm">Horario:</span> 09:00 horas</p>
                    </div>

                    <div class="border rounded-lg mt-2 shadow-lg">
                        <p class="text-sm bg-[#6C63FF] rounded-t-lg text-white p-1">Consulta</p>
                        <p class="mt-2 text-sm text-slate-600 pl-1"><span class="text-bold text-sm">Dia:</span> 27 de agosto</p>
                        <p class="mt-2 text-sm text-slate-600 pl-1"><span class="text-bold text-sm">Horario:</span> 11:00 horas</p>
                    </div>
                </section>   
            </div>

            <section class="bg-white overflow-hidden shadow-lg sm:rounded-lg p-3">
                <div class="mb-12 flex flex-col justify-center items-center mt-6">
                    <p class="text-sm text-gray-700 mb-2">Adicione arquivos de seu pet</p>
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white bg-[#6C63FF] hover:bg-[#867ffe] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Adicionar arquivo <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                        </button>
                        
                        <!-- Dropdown menu -->
                        <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Camera</a>
                            </li>
                            <hr>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fotos ou imagens</a>
                            </li>
                            <hr>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">PDFs</a>
                            </li>
                           </ul>
                        </div>
    
                </div>
                <h1>Arquivos de seu pet</h1>
                <div class="flex gap-2 mt-4 p-2 overflow-x-scroll [&::-webkit-scrollbar]:hidden">
                    <a href="#" class="p-1 h-7 border-2 border-[#6C63FF] bg-[#b2aefa] hover:scale-110 transition rounded-lg text-white text-sm">Todos</a>
                    <a href="#" class="p-1 h-7 border-2 border-[#6C63FF] bg-[#b2aefa] hover:scale-110 transition rounded-lg text-white text-sm">Documentos</a>
                    <a href="#" class="p-1 h-7 border-2 border-[#6C63FF] bg-[#b2aefa] hover:scale-110 transition rounded-lg text-white text-sm">Receitas</a>
                    <a href="#" class="p-1 h-7 border-2 border-[#6C63FF] bg-[#b2aefa] hover:scale-110 transition rounded-lg text-white text-sm">Exames</a>
                    <a href="#" class="p-1 h-7 border-2 border-[#6C63FF] bg-[#b2aefa] hover:scale-110 transition rounded-lg text-white text-sm">Outros</a>
                </div>

                <div class="grid sm:grid-cols-3 gap-3  flex-wrap mt-9 redond-md">
                    <!-- Arquivos -->
                    <div class="mb-6">
                        <p class="text-sm text-slate-600 mb-1">23 de agosto de 2024</p>
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
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Abrir arquivo</a>
                                              </li>
                                              <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Compartilhar arquivo</a>
                                              </li>
                                              <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Baixar arquivo</a>
                                              </li>
                                              <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Editar dados</a>
                                              </li>
                                              <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Excluir arquivo</a>
                                              </li>
                                        </ul>
                                    </div>                                        
                                </div>
                            </div>
                            <p class="mt-2">carteirinha_zoe</p>
                            <p class="mt-4 text-sm text-slate-500">Adicionado por Viviane</p>
                        </article>
                    </div>

                    <div>
                        <p class="text-sm text-slate-600 mb-1">23 de agosto de 2024</p>
                        <article class="border p-2">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                <!-- opções -->
                                <div class="flex justify-end items-end w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-2">receita_zoe</p>
                            <p class="mt-6 text-sm text-slate-500">Adicionado por Viviane</p>
                        </article>
                    </div>

                    <div>
                        <p class="text-sm text-slate-600 mb-1">23 de agosto de 2024</p>
                        <article class="border p-2">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                <!-- opções -->
                                <div class="flex justify-end items-end w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-2">receita_zoe</p>
                            <p class="mt-6 text-sm text-slate-500">Adicionado por Viviane</p>
                        </article>
                    </div>

                    <div>
                        <p class="text-sm text-slate-600 mb-1">23 de agosto de 2024</p>
                        <article class="border p-2">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                <!-- opções -->
                                <div class="flex justify-end items-end w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-2">receita_zoe</p>
                            <p class="mt-6 text-sm text-slate-500">Adicionado por Viviane</p>
                        </article>
                    </div>
                </div>

            </section>   
        </div>
    </div>  
</x-app-layout>


