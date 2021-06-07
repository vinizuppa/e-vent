<x-guest-layout>
    <div class="container">
        <div class="row my-2">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <a href="{{ route('home') }}" class="btn btn-outline-danger w-100">Voltar</a>
                        </div>
                        <div class="col-10">
                            <h3 class="card-title">{{ $events->count() > 0 ? $events->count() . ' resultados' : 'Nenhum resultado' }} para "{{ $search }}"</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($events as $event)
                <div class="col-12 my-2">
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
                                    <a href="{{ route('public.events.detail', $event) }}" class="btn btn-outline-danger">VER MAIS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 my-2">
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="card-text">Nenhum evento encontrado</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-guest-layout>
