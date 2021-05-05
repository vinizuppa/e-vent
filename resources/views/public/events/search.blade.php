<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-2 my-2">
                <a href="{{ route('home') }}" class="btn btn-danger">Voltar</a>
            </div>
            <div class="col-10 my-2">
                <h2>{{ $events->count() > 0 ? $events->count() . ' resultados' : 'Nenhum resultado' }} para "{{ $search }}"</h2>
            </div>
        </div>
        <div class="row row-cols-1">
            @forelse ($events as $event)
                <div class="col my-2">
                    <div class="card shadow">
                        <div class="row g-2">
                            <div class="col-6">
                                <img src="{{ count($event->images) > 0 ? Storage::url($event->images[0]->path) : asset('img/event/default.jpg') }}" class="img-fluid rounded shadow" alt="{{ $event->name }}" width="100%">
                            </div>
                            <div class="col-6">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $event->name }}</h5>
                                    <p class="card-text">{{ $event->description }}</p>
                                    <p class="card-text">Inicio: {{ $event->startDate() }}</p>
                                    <p class="card-text">Fim: {{ $event->endDate() }}</p>
                                    <p class="card-text">Valor: R$ {{ $event->registration_fee }}</p>
                                    <a href="#" class="btn btn-danger">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h4>Nenhum evento encontrado</h4>
            @endforelse
        </div>
    </div>
</x-guest-layout>
