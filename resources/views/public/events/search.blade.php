<x-guest-layout>
    <div class="container">
        <div class="row my-3">
            <div class="col-1">
                <a href="{{ route('home') }}" class="btn btn-primary">Voltar</a>
            </div>
            <div class="col-11">
                <h2>{{ count($events) }} resultados da busca para "{{ $search }}"</h2>
            </div>
        </div>
        <div class="row row-cols-1">
            @forelse ($events as $event)  
                <div class="col my-2">      
                    <div class="card shadow">
                        <div class="row g-2">
                            <div class="col-6">
                                <img src="https://agenciabrasilia.df.gov.br/wp-conteudo/uploads/2019/05/31.05.2019-Festas-juninas-animam-os-brasilienses-nos-meses-de-junho-e-julho-mas-%C3%A9-preciso-ter-cuidado-com-os-fogos-de-artif%C3%ADcio.-Foto-Pedro-Ventura-Ag%C3%AAncia-Bras%C3%ADlia.jpeg" class="img-fluid rounded shadow" alt="">
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
                <p>Nenhum evento encontrado</p>
            @endforelse
        </div>
    </div>
</x-guest-layout>