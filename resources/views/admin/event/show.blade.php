<x-app-layout>
    <x-slot name="title">Informações</x-slot>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ count($event->images) > 0 ? Storage::url($event->images[0]->path) : asset('img/event/default.jpg') }}" alt="{{ $event->name }}" class="card-img">
            </div>
        </div>
        <div class="col-md-8">
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
</x-app-layout>
