<x-app-layout>
    <x-slot name="title">Informações Atividade</x-slot>
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title">{{ $activity->name }}</h3>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col-12 col-md-6">
                    <p class="card-text"><strong>Descrição:</strong> {{ $activity->description }}</p>
                    <p class="card-text"><strong>Instruções:</strong> {{ $activity->instructions }}</p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="card-text"><strong>Tipo:</strong> {{ $activity->type }}</p>
                    <p class="card-text"><strong>Local:</strong> {{ $activity->place }}</p>
                    <p class="card-text"><strong>Vagas:</strong> {{ $activity->vacancies }}</p>
                    <p class="card-text"><strong>Responsável:</strong> {{ $activity->responsible }}</p>
                    <p class="card-text"><strong>Início:</strong> {{ $activity->start_date->isoFormat('L hh:mm') }}</p>
                    <p class="card-text"><strong>Fim:</strong> {{ $activity->end_date->isoFormat('L hh:mm') }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
