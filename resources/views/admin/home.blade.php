<x-app-layout>
    <x-slot name="title">Bem-vindo, {{ $user->name }}!</x-slot>
    <div class="card shadow mb-2">
        <div class="card-body">
            @if ($user->group == 'Participante')
                <h3 class="card-title">Suas inscrições</h3>
                @forelse ($user->subscriptions as $subscription)

                @empty
                    <p class="card-text">Sem inscrições</p>
                @endforelse
            @else
                <h3 class="card-title">Informações</h3>
                <p class="card-text">Eventos cadastrados: {{ $events }}</p>
                <p class="card-text">Atividades cadastradas: {{ $activities }}</p>
            @endif
        </div>
    </div>
</x-app-layout>
