<x-app-layout>
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-4">Vacinas do Animal</h1>
        @foreach($animais as $animal)
        <div class="bg-white shadow-md rounded-lg p-6 my-6">
            <h2 class="text-2xl font-bold mb-4">{{$animal->nome}}</h2>
            @foreach($animal->aplicacoes as $aplicacao)
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <p class="font-semibold">Data de aplicação:</p>
                    <p>{{ \Carbon\Carbon::parse($aplicacao->data_aplicacao)->format('d/m/Y') }}</p>
                </div> 

                <div>
                    <p class="font-semibold">Quantidade de doses a serem tomadas:</p>
                    <p>{{$aplicacao->quantidade}}</p>
                </div>

                <div>
                    <p class="font-semibold">Veterinario:</p>
                    <p>{{$aplicacao->veterinario->nome}}</p>
                </div>

                <div>
                    <p class="font-semibold">Numero de doses tomadas:</p>
                    <p>{{$aplicacao->numero_doses}} </p>
                </div>
              
                <div>
                    <p class="font-semibold">Nome da vacina:</p>
                    <p>{{$aplicacao->material->nome}}</p>
                </div>
            </div>
            <hr class="my-4">
            @endforeach
            <div class="flex justify-end mt-4">
                <a href="{{ route('vacina.download', ['id' => $aplicacao->id]) }}" class="bg-[#7d77fe] hover:bg-[#918bff] text-white font-bold py-2 px-4 rounded">
                    Baixar Informações
                </a>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>