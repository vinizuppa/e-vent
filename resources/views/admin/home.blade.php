<x-app-layout>
    <x-slot name="title">Bem-vindo, {{ $user->name }}!</x-slot>
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title">Informações</h3>
            <p class="card-text">Eventos cadastrados: {{ $events }}</p>
            <p class="card-text">Atividades cadastradas: {{ $activities }}</p>
        </div>
    </div>
</x-app-layout>
