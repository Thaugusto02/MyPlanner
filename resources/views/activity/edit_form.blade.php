<form action="{{ route('activity.update', $activity) }}" method="POST" class="mt-4 space-y-4">
    @csrf
    @method('PATCH')

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
            <label for="titulo" class="block text-sm font-medium text-gray-700">Título:</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $activity->titulo) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="data" class="block text-sm font-medium text-gray-700">Data:</label>
            <input type="date" name="data" id="data" value="{{ old('data', $activity->data) }}" required onclick="this.showPicker()" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="hora" class="block text-sm font-medium text-gray-700">Hora:</label>
            <input type="time" name="hora" id="hora" value="{{ old('hora', $activity->hora) }}" required onclick="this.showPicker()" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="cor" class="block text-sm font-medium text-gray-700">Cor:</label>
            <input type="color" name="cor" id="cor" value="{{ old('cor', $activity->cor) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
    </div>
    <div>
        <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição:</label>
        <textarea name="descricao" id="descricao" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('descricao', $activity->descricao) }}</textarea>
    </div>
    <br>
    <button type="submit" style="background-color: #2eb3a1; color: white; border: 1px solid #48bb78; padding: 8px 16px; border-radius: 8px;">Atualizar Atividade</button>
</form>
