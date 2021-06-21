<x-guest-layout>
    <div class="row justify-content-lg-center my-2">
        <div class="col col-lg-10">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row justify-content-md-center text-center">
                        <div class="col col-md-8">
                            <h2 class="card-title">{{ $event->name }}</h2>
                            <img src="{{ count($event->images) > 0 ? Storage::url($event->images[0]->path) : asset('img/event/default.jpg') }}" alt="Banner do evento" class="w-100 img-fluid rounded">
                        </div>
                    </div>
                    <div class="row m-4">
                        <div class="col text-center fw-bold">
                            <p class="card-text">{{ $event->description }}</p>
                        </div>
                    </div>
                    <div class="row m-2 text-center">
                        <div class="col">
                            <p class="card-text fw-bold">
                                <i class="bi bi-geo-alt text-danger"></i>
                                {{ $event->address }}
                            </p>
                            <p class="card-text fw-bold">
                                <i class="bi bi-telephone text-danger"></i>
                                {{ $event->phone }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="card-text fw-bold">
                                <i class="bi bi-calendar2-check text-danger"></i>
                                {{ $event->start_date->isoFormat('L') }}
                            </p>
                            <p class="card-text fw-bold">
                                <i class="bi bi-calendar2-x text-danger"></i>
                                {{ $event->end_date->isoFormat('L') }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="card-text fw-bold">
                                <i class="bi bi-cash-stack text-danger"></i>
                                R$ {{ $event->registration_fee }}
                            </p>
                            @if (Auth::user() && Auth::user()->group == 'Participante')
                                <a href="{{ route('public.subscription.create', $event) }}" class="btn btn-outline-danger w-100{{ $subscribed ? ' disabled' : '' }}">Inscrever-se</a>
                                @if ($subscribed)
                                    <small class="text-muted">Você já está inscrito neste evento</small>
                                @endif
                            @else
                                <a href="#" class="btn btn-outline-danger w-100 disabled">Inscrever-se</a>
                                <small class="text-muted">Disponível para participantes. <a href="{{ route('register') }}">Cadastre-se</a> ou faça <a href="{{ route('login') }}">login</a>.</small>
                            @endif
                        </div>
                    </div>
                    <hr class="bg-danger border-2">
                    <div class="row">
                        <div class="col">
                            <h2 class="card-text text-center">Atividades</h2>
                            <ul class="list-group">
                                @forelse ($event->activities as $activity)
                                    <li href="#" class="list-group-item list-group-item-action{{ $activity->vacancies == 0 ? ' list-group-item-danger' : ($activity->vacancies < 10 ? ' list-group-item-warning' : '') }}">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">
                                                {{ $activity->name }}
                                                @if ($activity->vacancies == 0)
                                                    <span class="badge bg-danger">Sem vagas</span>
                                                @elseif ($activity->vacancies < 10)
                                                    <span class="badge bg-warning">Poucas vagas</span>
                                                @endif
                                            </h5>
                                            <small class="text-muted">Início: {{ $activity->start_date->isoFormat('L hh:mm') }}</small>
                                        </div>
                                        <h5></h5>
                                        <p class="mb-1">Instruções: {{ $activity->instructions }}</p>
                                        <p class="mb-1">Tipo: {{ $activity->type }}</p>
                                        <p class="mb-1">Vagas disponíveis: {{ $activity->vacancies }}</p>
                                    </li>
                                @empty
                                    <li href="#" class="list-group-item list-group-item-action list-group-item-warning text-center">
                                        Sem atividades
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
