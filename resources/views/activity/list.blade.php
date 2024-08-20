<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        <h3 class="text-lg font-semibold">{{ __("Lista de Atividades") }}</h3>
        @if($activities->isEmpty())
            <p class="mt-4">Nenhuma atividade cadastrada ainda.</p>
        @else
            <ul class="mt-4 space-y-4">
                @foreach($activities as $activity)
                    <li class="flex items-center p-4 border rounded">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold">{{ $activity->titulo }}</h3>
                            <p class="text-sm text-gray-600">{{ $activity->data }} às {{ $activity->hora }}</p>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('activity.edit', $activity) }}">
                                <button type="button" style="background-color: #2eb3a1; color: white; border: 1px solid #48bb78; padding: 6px 14px; border-radius: 8px; margin-right: 24px;">
                                    Editar
                                </button>
                            </a>
                            <span class="block w-6 h-6 rounded-full" style="background-color: {{ $activity->cor }};"></span>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>