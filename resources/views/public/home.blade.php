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
                <form class="col-10 col-md-8 align-items-center shadow" action="{{ route('public.events.search') }}" method="get">                    
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Encontre um evento" name="event">
                        <button class="btn btn-danger" type="submit">
                            <i class="bi bi-search text-light"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1>Próximos eventos</h1>
            </div>
        </div>
        <!-- Cards de eventos -->
        <div class="row row-cols-1 row-cols-md-3 my-4 g-4">
            @forelse ($events as $event)
                <div class="col">
                    <div class="card shadow">
                        <img src="https://agenciabrasilia.df.gov.br/wp-conteudo/uploads/2019/05/31.05.2019-Festas-juninas-animam-os-brasilienses-nos-meses-de-junho-e-julho-mas-%C3%A9-preciso-ter-cuidado-com-os-fogos-de-artif%C3%ADcio.-Foto-Pedro-Ventura-Ag%C3%AAncia-Bras%C3%ADlia.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->name }}</h5>
                            <p class="card-text">Inicio: {{ $event->startDate() }}</p>
                            <p class="card-text">Fim: {{ $event->endDate() }}</p>
                            <p class="card-text">Valor: R$ {{ $event->registration_fee }}</p>
                            <a href="#" class="btn btn-danger">Ver mais</a>
                        </div>
                    </div>
                </div>
            @empty
                <h2>Nenhum evento próximo</h2>
            @endforelse
        </div>
        <div class="row my-2"> 
            <div class="d-flex justify-content-center">
                {!! $events->links() !!}
            </div>
        </div>
    </div>
</x-guest-layout>
