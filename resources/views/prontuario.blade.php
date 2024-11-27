<x-app-layout>

    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-4">Prontuário do Animal</h1>
        @foreach($prontuarios as $prontuario)
            <div class="bg-white shadow-md rounded-lg p-6 my-6">
                <h1 class="text-3xl font-bold mb-4">{{$prontuario->animal->nome}}</h1>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="font-semibold">Data do prontuário:</p>
                        <p>{{ \Carbon\Carbon::parse($prontuario->data_prontuario)->format('d/m/Y') }}</p>
                    </div> 

                    <div>
                        <p class="font-semibold">Diagnostico:</p>
                        <p>{{$prontuario->diagnostico}}</p>
                    </div>

                    <div>
                        <p class="font-semibold">Veterinario:</p>
                        <p>{{$prontuario->veterinario->nome}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>