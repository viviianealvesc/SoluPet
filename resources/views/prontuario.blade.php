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
                        <p class="font-semibold">Motivo da consulta:</p>
                        <p>{{$prontuario->motivoConsulta}}</p>
                    </div>

                    <div>
                        <p class="font-semibold">Sinais clínicos:</p>
                        <p>{{$prontuario->sinaisClinicos}}</p>
                    </div>

                    <div>
                        <p class="font-semibold">Prescrição:</p>
                        <p>{{$prontuario->prescricao}}</p>
                    </div>

                    <div>
                        <p class="font-semibold">Procedimentos realizados:</p>
                        <p>{{$prontuario->procedimentosRealizados}}</p>
                    </div>

                    <div>
                        <p class="font-semibold">Observações:</p>
                        <p>{{$prontuario->observacoes}}</p>
                    </div>

                    <div>
                        <p class="font-semibold">Veterinario:</p>
                        <p>{{$prontuario->veterinario->nome}}</p>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="{{ route('prontuario.download', ['id' => $prontuario->id]) }}" class="bg-[#7d77fe] hover:bg-[#918bff] text-white font-bold py-2 px-4 rounded">
                        Fazer Download do Prontuário
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>