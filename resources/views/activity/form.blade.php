<form action="{{ route('activity.create') }}" method="POST" class="mt-4 space-y-4">
    @csrf
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
            <label for="titulo" class="block text-sm font-medium text-gray-700">Título:</label>
            <input type="text" id="titulo" name="titulo" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="data" class="block text-sm font-medium text-gray-700">Data:</label>
            <input type="date" id="data" name="data" required onclick="this.showPicker()" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="hora" class="block text-sm font-medium text-gray-700">Hora:</label>
            <input type="time" id="hora" name="hora" required onclick="this.showPicker()" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="cor" class="block text-sm font-medium text-gray-700">Cor:</label>
            <input type="color" id="cor" name="cor" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
    </div>
    <div>
        <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição:</label>
        <textarea id="descricao" name="descricao" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
    </div>
    <br>
    <button type="submit" style="background-color: #79b36b; color: white; border: 1px solid #48bb78; padding: 8px 16px; border-radius: 8px;">Criar Atividade</button>
</form>