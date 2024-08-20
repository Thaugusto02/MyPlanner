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
                    @include('activity/form')
                </div>
            </div>
            @include('activity/list')
        </div>
    </div>
</x-app-layout>