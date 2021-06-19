<x-guest-layout>
    <div class="container">
        <!-- Carousel destaques -->
        <!--
        <div class="row my-4">
            <div class="col-md-8">
                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://passevip.com.br/wp-content/uploads/2018/04/2018-04-23-como-aumentar-o-alcance-e-atrair-publico-para-seu-evento.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Destaque 1</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://passevip.com.br/wp-content/uploads/2018/04/2018-04-23-como-aumentar-o-alcance-e-atrair-publico-para-seu-evento.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Destaque 2</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://passevip.com.br/wp-content/uploads/2018/04/2018-04-23-como-aumentar-o-alcance-e-atrair-publico-para-seu-evento.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Destaque 3</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel"  data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel"  data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        -->
        <!-- Form busca de eventos -->
        <div class="row my-4">
            <div class="d-flex justify-content-center">
                <form action="{{ route('public.events.search') }}" method="get" class="col-10 align-items-center shadow">
                    <div class="input-group">
                        <input type="text" name="event" placeholder="Encontre um evento" class="form-control form-control-lg">
                        <button class="btn btn-danger btn-lg" type="submit">
                            <i class="bi bi-search text-light"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title">Próximos eventos</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cards de eventos -->
        <div class="row my-2 g-4">
            @forelse ($events as $event)
                <div class="col-12 col-md-3">
                    <div class="card shadow">
                        <img src="{{ count($event->images) > 0 ? Storage::url($event->images[0]->path) : asset('img/event/default.jpg') }}" class="card-img-top" alt="{{ $event->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->name }}</h5>
                            <p class="card-text">Período: {{ $event->start_date->isoFormat('L') }} - {{ $event->end_date->isoFormat('L') }}</p>
                            <p class="card-text">Atividades: {{ count($event->activities) }}</p>
                            <p class="card-text">Valor: R$ {{ $event->registration_fee }}</p>
                            <a href="{{ route('public.events.detail', $event) }}" class="btn btn-outline-danger w-100 text-uppercase">Ver mais</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <h2 class="card-title">Nenhum evento próximo</h2>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-guest-layout>
