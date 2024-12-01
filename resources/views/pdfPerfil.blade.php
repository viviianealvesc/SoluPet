<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacinas do Animal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7fafc;
            color: #2d3748;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .text-center {
            text-align: center;
        }
        .font-bold {
            font-weight: bold;
        }
        .text-gray-700 {
            color: #4a5568;
        }
        .text-gray-600 {
            color: #718096;
        }
        .text-gray-800 {
            color: #2d3748;
        }
        .text-sm {
            font-size: 0.875rem;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .mt-8 {
            margin-top: 2rem;
        }
        .mb-4 {
            margin-bottom: 1rem;
        }
        .my-10 {
            margin: 2.5rem 0;
        }
        .p-8 {
            padding: 2rem;
        }
        .shadow-md {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .rounded-lg {
            border-radius: 0.5rem;
        }
        .info-box {
            padding: 10px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            background-color: #f7fafc;
        }
        .info-box p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center mb-6">
            <h1 class="text-4xl font-bold text-gray-700">Vacinas do Animal</h1>
        </div>
        @foreach($animal->aplicacoes as $aplicacao)
        <div class="bg-white shadow-md rounded-lg p-6 my-6">
            <h2 class="text-2xl font-bold mb-4">{{ $animal->nome }}</h2>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <p class="font-semibold">Data de aplicação:</p>
                    <p>{{ \Carbon\Carbon::parse($aplicacao->data_aplicacao)->format('d/m/Y') }}</p>
                </div> 

                <div>
                    <p class="font-semibold">Quantidade de doses a serem tomadas:</p>
                    <p>{{ $aplicacao->quantidade }}</p>
                </div>

                <div>
                    <p class="font-semibold">Veterinario:</p>
                    <p>{{ $aplicacao->veterinario->nome }}</p>
                </div>

                <div>
                    <p class="font-semibold">Numero de doses tomadas:</p>
                    <p>{{ $aplicacao->numero_doses }}</p>
                </div>
              
                <div>
                    <p class="font-semibold">Nome da vacina:</p>
                    <p>{{ $aplicacao->material->nome }}</p>
                </div>
            </div>
            <hr class="my-4">
        </div>
        @endforeach
    </div>
</body>
</html>