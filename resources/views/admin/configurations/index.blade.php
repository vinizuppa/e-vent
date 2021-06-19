<x-app-layout>
    <x-slot name="title">Configurações</x-slot>
    <x-slot name="cardHeader">
        <a href="{{ route('configurations.create') }}" class="btn btn-danger">
            <i class="fas fa-pencil-alt"></i>
        </a>
    </x-slot>
    <div class="card shadow mb-2 p-2">
        @forelse ($configurations as $configuration)
            <p class="card-text"><strong>{{ $configuration->label }}:</strong> {{ $configuration->value == '' ? '---' : $configuration->value }}</p>
        @empty
            <p class="card-text">Sem configurações cadastradas</p>
        @endforelse
    </div>
</x-app-layout>
