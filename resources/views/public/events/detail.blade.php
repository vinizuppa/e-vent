<x-guest-layout>
    <div class="container-fluid d-flex justify-content-center flex-wrap mt-2">    
        <img src="{{ count($event->images) > 0 ? Storage::url($event->images[0]->path) : asset('img/event/default.jpg') }}" alt="Banner do evento" class="w-75 img-fluid rounded">
    </div>
    <div class="container-fluid d-flex justify-content-center flex-wrap mt-2">
        <h2 class="my-3 text-dark"><i class="mx-2 bi bi-bookmark-star text-danger"></i>{{ $event->name }}</h2>
    </div>
    <div class="container-fluid d-flex justify-content-center flex-wrap mt-2">
        <div class="card border rounded shadow mx-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-geo-alt text-danger"></i>{{ $event->address }}</h5>
                <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-telephone text-danger"></i>{{ $event->phone }}</h5>
            </div>
        </div>
        <div class="card border rounded shadow mx-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-calendar2-check text-danger"></i>{{ $event->startDate() }}</h5>
                <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-calendar2-x text-danger"></i>{{ $event->endDate() }}</h5>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center flex-wrap mt-2 ">
        <h2 class="my-3 text-dark">Descição do evento</h2>
    </div>
        <hr class="bg-danger border-2 border-top">

    <div class="container-fluid d-flex justify-content-center flex-wrap">
        <h5 class="card-text my-3 text-dark"></i>{{ $event->description }}</h5>
    </div>
    <div class="container">
        <h2 class="my-3 text-dark text-center">Atividades do evento</h2>
        <div class="list-group my-3">
            @forelse ($event->activities as $activity)
                <a href="#" class="list-group-item list-group-item-action mb-3 border rounded shadow" aria-current="true">
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
        <div class="d-flex justify-content-center">        
            <div class="card border rounded shadow" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-cash-stack text-danger"></i>{{ $event->registration_fee }}</h5>
                    <a href="{{ route('public.events.subscribe', $event->id) }}" class="btn btn-outline-danger w-100">INSCREVA-SE</a>
                </div>
            </div>
        </div>
    </div>              
</x-guest-layout>