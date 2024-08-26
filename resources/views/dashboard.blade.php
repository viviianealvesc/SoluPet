<x-app-layout>
    <div class="py-12" style="background-image: url('{{ asset("image/patas1.png") }}'); ">
        <form class="pb-4 px-8 flex justify-end  items-center" action="">
            <input class="rounded-md text-sm w-72 w-" type="text" placeholder="Busque por, clinícas ou categorias">
            <button class="border-2 p-1 m-2 rounded-lg shadow-md">🔍</button>
        </form>
        <div class="flex z-0 flex-nowrap gap-2 bg-white p-4  overflow-x-scroll [&::-webkit-scrollbar]:hidden  mb-5">
            <div class="flex bg-[#6C63FF] border hover:scale-90 transition border-[#6C63FF] min-w-[270px] rounded-lg">
                <p class="text-sm text-white pl-2 pt-2">Clínica Geral para Pequenos Animais</p>
                <img class=" w-16 " src="{{ asset("image/pequeno.png") }}" alt="">
            </div>
            <div class="flex bg-[#6C63FF] border hover:scale-90 transition border-[#6C63FF] min-w-[270px] rounded-lg">
                <p class="text-sm text-white pl-2 pt-2">Clínica de Animais Exóticos</p>
                <img class=" w-16 " src="{{ asset("image/exoticos.png") }}" alt="">
            </div>
            <div class="flex bg-[#6C63FF] border hover:scale-90 transition border-[#6C63FF] min-w-[270px] rounded-lg">
                <p class="text-sm text-white pl-2 pt-2">Clínica de Animais de Grande Porte</p>
                <img class=" w-16 " src="{{ asset("image/grande.png") }}" alt="">
            </div>
            <div class="flex bg-[#6C63FF] border hover:scale-90 transition border-[#6C63FF] min-w-[270px] rounded-lg">
                <p class="text-sm text-white pl-2 pt-2">Clínica de Urgência/Emergência Veterinária</p>
                <img class=" w-16 " src="{{ asset("image/25horas.png") }}" alt="">
            </div>
            <div class="flex bg-[#6C63FF] border hover:scale-90 transition border-[#6C63FF] min-w-[270px] rounded-lg">
                <p class="text-sm text-white pl-2 pt-2">Clínica Veterinária Especializada</p>
                <img class=" w-16 " src="{{ asset("image/especializada.png") }}" alt="">
            </div>
            <div class="flex bg-[#6C63FF] border hover:scale-90 transition border-[#6C63FF] min-w-[270px] rounded-lg">
                <p class="text-sm text-white pl-2 pt-2">Clínica de Reprodução Animal</p>
                <div class="flex justify-end items-end">
                    <img class="w-18 h-16" src="{{ asset("image/reproducao.png") }}" alt="">
                </div>
            </div>
            <div class="flex bg-[#6C63FF] border hover:scale-90 transition border-[#6C63FF] min-w-[270px] rounded-lg">
                <p class="text-sm text-white pl-2 pt-2">Clínica de Animais Selvagens e Resgate</p>
                <img class=" w-16 " src="{{ asset("image/selvagens.png") }}" alt="">
            </div>
            <div class="flex bg-[#6C63FF] border hover:scale-90 transition border-[#6C63FF] min-w-[270px] rounded-lg">
                <p class="text-sm text-white pl-2 pt-2">Clínica Veterinária Móvel</p>
                <img class=" w-[100px] h-16 " src="{{ asset("image/movel.png") }}" alt="">
            </div>
        </div>

         <!-- Cidade em que o usuário mora -->
        <div class="flex m-5 gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>  
            <p>Guararapes - SP <br> <span class="text-sm text-slate-600">Clinícas na cidade onde mora</span></p>            
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-3 ">
            <!-- Cards -->
            <section class="bg-white overflow-hidden shadow-lg sm:rounded-lg p-3">
                <div class="flex">
                    <img class="w-14 rounded-full" src="{{ asset("image/clinica.png") }}" alt="">
                  <div class="pl-2 w-5/6">
                    <a href="{{route('clinica')}}" class="font-semibold">Cliníca PlanetPet</a> 
                    <!-- estrelas -->
                    <div class="flex">
                        <svg class="w-4 text-[#6C63FF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg> 
                        <svg class="w-4 text-[#6C63FF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg> 
                        <svg class="w-4 text-[#6C63FF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <svg class="w-4 text-[#6C63FF]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                        </svg>
                        <svg class="w-4 text-[#6C63FF]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                        </svg>
                    </div>  
                </div>  
                   
                <div class="flex justify-end items-top w-1/6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </div>  
                
            <!-- Informações da clinica -->
            <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, explicabo cupiditate repudiandae minima id, rem consectetur...</p>
                <div class="flex pt-2">
                    <p class="flex gap-1 text-sm font-semibold text-green-400">
                        <svg class="w-4 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                        </svg>
                          
                        Aberto 
                    </p>
                    <p class="text-sm pl-1 text-slate-500">▪ presencial, domicilio</p>
                </div>

                <div class="flex gap-2 mt-3">
                    <p class="text-[#6C63FF] bg-[#c4c1f9] p-1 rounded-md text-sm">Clinica geral</p>
                    <p class="text-[#6C63FF] bg-[#c4c1f9] p-1 rounded-md text-sm">Dermatlogista</p>
                </div>
            </section>   
            
            <section class="bg-white overflow-hidden shadow-lg sm:rounded-lg p-3">
                <div class="flex">
                    <img class="w-14 rounded-full" src="{{ asset("image/clinica.png") }}" alt="">
                  <div class="pl-2 w-5/6">
                    <p class="font-semibold">Cliníca PlanetPet</p> 
                    <!-- estrelas -->
                    <div class="flex">
                        <svg class="w-4 text-[#6C63FF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg> 
                        <svg class="w-4 text-[#6C63FF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg> 
                        <svg class="w-4 text-[#6C63FF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <svg class="w-4 text-[#6C63FF]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                        </svg>
                        <svg class="w-4 text-[#6C63FF]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                        </svg>
                    </div>  
                </div>  

                <div class="flex justify-end items-top w-1/6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
                   
            </div>    
            <!-- Informações da clinica -->
            <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, explicabo cupiditate repudiandae minima id, rem consectetur...</p>
                <div class="flex pt-2">
                    <p class="flex gap-1 text-sm font-semibold text-green-400">
                        <svg class="w-4 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                        </svg>
                          
                        Aberto 
                    </p>
                    <p class="text-sm pl-1 text-slate-500">▪ presencial, domicilio</p>
                </div>

                <div class="flex gap-2 mt-3">
                    <p class="text-[#6C63FF] bg-[#c4c1f9] p-1 rounded-md text-sm">Clinica geral</p>
                    <p class="text-[#6C63FF] bg-[#c4c1f9] p-1 rounded-md text-sm">Dermatlogista</p>
                </div>
            </section>   
    </div>
</div>
       
</x-app-layout>
