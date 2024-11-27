<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteirinha do Animal</title>
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
            margin: 10px;
            border: 1px solid #b2aeff;
            border-radius: 8px;
            background-color: #d8d6ff;
        }
        .info-box p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center mb-6">
            <h1 class="text-4xl font-bold text-gray-700">Carteirinha do Animal</h1>
        </div>
        <div class="grid grid-cols-2 text-lg">
            <div class="info-box">
            <p class="font-semibold text-gray-600">Nome:</p>
            <p class="text-gray-800">{{ $animal->nome }}</p>
            </div>
            <div class="info-box">
            <p class="font-semibold text-gray-600">Peso:</p>
            <p class="text-gray-800">{{ $animal->peso }}</p>
            </div>
            <div class="info-box">
            <p class="font-semibold text-gray-600">Altura:</p>
            <p class="text-gray-800">{{ $animal->altura }}</p>
            </div>
            <div class="info-box">
            <p class="font-semibold text-gray-600">Idade:</p>
            <p class="text-gray-800">{{ $animal->idade }} anos</p>
            </div>
            <div class="info-box">
            <p class="font-semibold text-gray-600">Tutor:</p>
            <p class="text-gray-800">{{ $animal->tutor->nome }}</p>
            </div>
            <div class="info-box">
            <p class="font-semibold text-gray-600">Raça:</p>
            <p class="text-gray-800">{{ $animal->raca->nome_raca }}</p>
            </div>
            <div class="info-box">
            <p class="font-semibold text-gray-600">Espécie:</p>
            <p class="text-gray-800">{{ $animal->especie->nome_especie }}</p>
            </div>
        </div>
    </div>
</body>
</html>