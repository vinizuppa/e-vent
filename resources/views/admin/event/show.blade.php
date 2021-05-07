<x-app-layout>
    <x-slot name="title">Informações evento</x-slot>
    <div class="row g-2 mb-2">
        <div class="col-12 col-md-4 mb-2">
            <div class="card shadow">
                <img src="{{ count($event->images) > 0 ? Storage::url($event->images[0]->path) : asset('img/event/default.jpg') }}" alt="{{ $event->name }}" class="card-img">
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title">{{ $event->name }}</h4>
                    <p class="card-text">Descrição: {{ $event->description }}</p>
                    <p class="card-text">Endereço: {{ $event->address }}</p>
                    <p class="card-text">Telefone: {{ $event->phone }}</p>
                    <p class="card-text">Valor inscrição: {{ $event->registration_fee }}</p>
                    <p class="card-text">Início: {{ $event->startDate() }}</p>
                    <p class="card-text">Fim: {{ $event->endDate() }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">
            <h5 class="card-title text-center">Atividades</h5>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-2">
        @forelse ($event->activities as $activity)
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{ route('activities.show', $activity) }}">{{ $activity->name }}</a>
                        </h4>
                        <p class="card-text">Início: {{ $activity->startDate() }}</p>
                        <p class="card-text">Fim: {{ $activity->endDate() }}</p>
                        <p class="card-text">Vagas: {{ $activity->vacancies }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>Nenhuma atividade cadastrada</p>
        @endforelse
    </div>
</x-app-layout>
