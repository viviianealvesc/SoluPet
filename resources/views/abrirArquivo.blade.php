<x-app-layout>
<div class="container mx-auto p-4">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Prontuário Médico do Animal</h2>
        <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
            <div class="col-span-1">
                <div class="mb-4">
                    <label class="block text-black text-sm font-bold mb-2">Código do animal:</label>
                    <p class="text-gray-900">33</p>
                </div>
                <div class="mb-4">
                    <label class="block text-black text-sm font-bold mb-2">Data de Atendimento:</label>
                    <p class="text-gray-900">15/10/2023</p>
                </div>
                <div class="mb-4">
                    <label class="block text-black text-sm font-bold mb-2">Hora de Atendimento:</label>
                    <p class="text-gray-900">14:30</p>
                </div>
                <div class="mb-4">
                    <label class="block text-black text-sm font-bold mb-2">Motivo da Consulta:</label>
                    <p class="text-gray-900">Perda de apetite e letargia.</p>
                </div>
                <div class="mb-4">
                    <label class="block text-black text-sm font-bold mb-2">Sinais Clínicos:</label>
                    <p class="text-gray-900">Febre leve, gengivas pálidas, respiração ofegante.</p>
                </div>
            </div>
            <div class="col-span-1">
                <div class="mb-4">
                    <label class="block text-black text-sm font-bold mb-2">Diagnóstico:</label>
                    <p class="text-gray-900">Infecção bacteriana leve.</p>
                </div>
                <div class="mb-4">
                    <label class="block text-black text-sm font-bold mb-2">Prescrição:</label>
                    <p class="text-gray-900">Antibiótico (Amoxicilina) 250mg, 2 vezes ao dia por 7 dias.</p>
                </div>
                <div class="mb-4">
                    <label class="block text-black text-sm font-bold mb-2">Procedimentos Realizados:</label>
                    <p class="text-gray-900">Exame de sangue, administração de soro intravenoso.</p>
                </div>
                <div class="mb-4">
                    <label class="block text-black text-sm font-bold mb-2">Observações:</label>
                    <p class="text-gray-900">Reavaliar em 7 dias, monitorar ingestão de alimentos e água.</p>
                </div>
            </div>
        </div>
        <div class="mt-4 flex justify-end">
            <button class="bg-[#6C63FF] text-white font-bold py-2 px-4 rounded">
                Fazer Download do Arquivo
            </button>
        </div>
    </div>

</div>
</x-app-layout>