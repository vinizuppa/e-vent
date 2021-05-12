<x-app-layout>
    <x-slot name="title">Informações Atividade</x-slot>
    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title">{{ $activity->name }}</h4>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <p class="card-text">Descrição: {{ $activity->description }}</p>
                    <p class="card-text">Tipo: {{ $activity->type }}</p>
                    <p class="card-text">Local: {{ $activity->place }}</p>
                    <p class="card-text">Instruções: {{ $activity->instructions }}</p>
                </div>
                <div class="col">
                    <p class="card-text">Vagas: {{ $activity->vacancies }}</p>
                    <p class="card-text">Responsável: {{ $activity->responsible }}</p>
                    <p class="card-text">Início: {{ $activity->startDate() }}</p>
                    <p class="card-text">Fim: {{ $activity->endDate() }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
