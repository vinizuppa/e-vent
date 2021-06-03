<x-app-layout>
    <x-slot name="title">Informações evento</x-slot>
    <div class="card shadow mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col col-md-5">
                    <img src="{{ count($event->images) > 0 ? Storage::url($event->images[0]->path) : asset('img/event/default.jpg') }}" alt="{{ $event->name }}" class="card-img">
                </div>
                <div class="col col-md-7">
                    <h4 class="card-title">{{ $event->name }}</h4>
                    <p class="card-text">Descrição: {{ $event->description }}</p>
                    <p class="card-text">Endereço: {{ $event->address }}</p>
                    <p class="card-text">Telefone: {{ $event->phone }}</p>
                    <p class="card-text">Valor inscrição: {{ $event->registration_fee }}</p>
                    <p class="card-text">Início: {{ $event->startDate() }}</p>
                    <p class="card-text">Fim: {{ $event->endDate() }}</p>
                </div>
            </div>
            <hr class="border-2 bg-danger">
            <div class="row">
                <div class="col">
                    <h5 class="card-title text-center">Atividades</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="list-group">
                        @forelse ($event->activities as $activity)
                            <li href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $activity->name }}</h5>
                                    <small class="text-muted">Início: {{ $activity->startDate() }}</small>
                                </div>
                                <h5></h5>
                                <p class="mb-1">Instruções: {{ $activity->instructions }}</p>
                                <p class="mb-1">Tipo: {{ $activity->type }}</p>
                                <p class="mb-1">Vagas disponíveis: {{ $activity->vacancies }}</p>
                            </li>
                        @empty
                            <li href="#" class="list-group-item list-group-item-action list-group-item-warning text-center">
                                Nenhuma atividade cadastrada
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
