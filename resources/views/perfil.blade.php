<x-app-layout>
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-4">Perfil do Animal</h1>
        @foreach($animais as $animal)
        <div class="bg-white shadow-md rounded-lg p-6 my-6">
            <h1 class="text-3xl font-bold mb-4">{{$animal->nome}}</h1>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="font-semibold">Nome:</p>
                        <p>{{$animal->nome}}</p>
                    </div>
                    <div>
                        <p class="font-semibold">Peso:</p>
                        <p>{{$animal->peso}}</p>
                    </div>
                    <div>
                        <p class="font-semibold">Altura:</p>
                        <p>{{$animal->altura}}</p>
                    </div>
                    <div>
                        <p class="font-semibold">Idade:</p>
                        <p>{{$animal->idade}} ano</p>
                    </div>
                    <div>
                        <p class="font-semibold">Tutor:</p>
                        <p>{{$animal->tutor->nome}}</p>
                    </div>
                    <div>
                        <p class="font-semibold">Raça:</p>
                        <p>{{$animal->raca->nome_raca}}</p>
                    </div>
                    <div>
                        <p class="font-semibold">Espécie:</p>
                        <p>{{$animal->especie->nome_especie}}</p>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
</x-app-layout>