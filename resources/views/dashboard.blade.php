<x-app-layout>
    <div class="py-12">  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-3 ">
            <div class="flex mx-2">
                <div>
                    <img class="w-10 h-10 me-4 rounded-full border-2 border-[#6C63FF]" src="/image/reproducao.png" alt="">
                    <p class="text-sm ml-1 text-[#6C63FF]">Zoe</p>
                </div>
            </div>
            <section class="bg-white overflow-hidden shadow-lg sm:rounded-lg p-3">
                <h1>Arquivos de seu pet</h1>
                    <!-- Arquivos -->
                <div class="sm:grid sm:grid-cols-3 gap-2 mb-6">
                    <article class="rounded-lg border mt-2 shadow-md bg-[#7d77fe] hover:scale-90 transition">
                        <div class="flex">
                            <div class="w-full p-3">
                                <p class="font-semibold text-white">Zoe</p>
                                <p class="text-sm text-white">Akuta ▪ 11 meses</p>
                            </div>
                            <div class="flex justify-end items-top p-3 w-full">
                                <h2 class="text-sm text-white font-semibold">Perfil</h2>
                            </div>
                        </div>
                        <img class="w-28" src="{{ asset("image/patas.png") }}" alt="carteirinha">
                    </article>

                    <article class="rounded-lg border mt-2 shadow-md bg-[#7d77fe] hover:scale-90 transition">
                        <div class="flex">
                            <div class="w-full p-3">
                                <p class="text-sm text-white">2 vacinas <br> tomadas</p>
                            </div>
                            <div class="flex justify-end items-top p-3 w-full">
                                <h2 class="text-sm text-white font-semibold">Carteirinha</h2>
                            </div>
                        </div>
                        <img class="w-28 mt-1" src="{{ asset("image/patas.png") }}" alt="carteirinha">
                    </article>

                    <article class="rounded-lg border mt-2 shadow-md bg-[#7d77fe] hover:scale-90 transition">
                        <div class="flex">
                            <div class="w-full p-3">
                                <p class="text-sm text-white">Nenhum histórico cadastrado</p>
                            </div>
                            <div class="flex justify-end items-top p-3 w-full">
                                <h2 class="text-sm text-white font-semibold">Histórico</h2>
                            </div>
                        </div>
                        <img class="w-28 mt-1" src="{{ asset("image/patas.png") }}" alt="carteirinha">
                    </article>
                </div>
            </section>   
        </div>
    </div>  
</x-app-layout>


