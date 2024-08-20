<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Atividades') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <span class="text-lg font-semibold">{{ __("Criar Nova Atividade") }}</span>
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
                        <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Criar Atividade</button>
                    </form>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">{{ __("Lista de Atividades") }}</h3>
                    @if($activities->isEmpty())
                        <p class="mt-4">Nenhuma atividade cadastrada ainda.</p>
                    @else
                        <ul class="mt-4 space-y-4">
                            @foreach($activities as $activity)
                                <li class="flex justify-between items-center p-4 border rounded">
                                    <div>
                                        <h4 class="text-lg font-medium">{{ $activity->titulo }}</h4>
                                        <p>{{ $activity->data }} - {{ $activity->hora }}</p>
                                        @if($activity->descricao)
                                            <p class="mt-2 text-gray-600">{{ $activity->descricao }}</p>
                                        @endif
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <span class="block w-6 h-6 rounded-full" style="background-color: {{ $activity->cor }};"></span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
