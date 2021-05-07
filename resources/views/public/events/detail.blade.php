<x-guest-layout>
    <div class="container-fluid d-flex justify-content-center flex-wrap mt-2">        
        <div class="card shadow w-90">
            <div class="row g-0">
                <div class="justify-content-center col-md-6 align-middle">
                    <img src="{{ count($event->images) > 0 ? Storage::url($event->images[0]->path) : asset('img/event/default.jpg') }}" alt="Banner do evento" class="w-100 img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h3 class="card-title mx-2 text-dark">Informações do Evento</h3>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-bookmark-star text-danger"></i>{{ $event->name }}</h5>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-file-earmark-text text-danger"></i>{{ $event->description }}</h5>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-geo-alt text-danger"></i>{{ $event->address }}</h5>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-telephone text-danger"></i>{{ $event->phone }}</h5>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-calendar2-check text-danger"></i>{{ $event->startDate() }}</h5>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-calendar2-x text-danger"></i>{{ $event->endDate() }}</h5>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-cash-stack text-danger"></i>{{ $event->registration_fee }}</h5>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('public.events.subscribe', $event->id) }}" class="btn btn-outline-danger w-100">INSCREVA-SE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="list-group my-3">
                @forelse ($event->activities as $activity)
                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $activity->name }}</h5>
                                <small class="text-muted">Inicio: {{ $activity->startDate() }}</small>
                            </div>
                            <p class="mb-1">Instruções: {{ $activity->instructions }}</p>
                            <p class="mb-1">Tipo: {{ $activity->type }}</p>
                            <small class="text-muted">Vagas disponíveis: {{ $activity->vacancies }}</small>
                        </a>   
                @empty
                        <div class="row justify-content-center">
                            <div class="alert alert-warning text-center" role="alert">
                                Sem atividades cadastradas!
                            </div>
                        </div>
                @endforelse

            <div>  
    </div>              
</x-guest-layout>
