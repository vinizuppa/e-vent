<x-guest-layout>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <!-- <div class="card-body">
                    <img src="https://passevip.com.br/wp-content/uploads/2018/04/2018-04-23-como-aumentar-o-alcance-e-atrair-publico-para-seu-evento.jpg" alt="" width="100%">
                    Evento em destaque
                </div> -->
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <form class="row g-3 align-items-center mt-5 d-flex justify-content-center w-50" action="#" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control form-control-lg" placeholder="Encontre um evento" aria-label="Encontre um evento" aria-describedby="button-addon2">
                <button class="btn btn-danger" type="button" id="button-addon2">
                    <i class="bi bi-search text-light"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="row my-5">
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body" heigth="50%">
                    <img src="https://agenciabrasilia.df.gov.br/wp-conteudo/uploads/2019/05/31.05.2019-Festas-juninas-animam-os-brasilienses-nos-meses-de-junho-e-julho-mas-%C3%A9-preciso-ter-cuidado-com-os-fogos-de-artif%C3%ADcio.-Foto-Pedro-Ventura-Ag%C3%AAncia-Bras%C3%ADlia.jpeg" alt="" width="100%">
                    <h6 class="fst-italic">Local: Chácara do Pé de Pano</h6>
                    <h6 class="fst-italic">Data: 23/03/2021</h6>
                    <h6 class="fst-italic">Hora: 16:00 ás 20:00</h6>
                    <div>
                    <a href="#" class="btn btn-danger fst-italic">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body" heigth="50%">
                    <img src="https://agenciabrasilia.df.gov.br/wp-conteudo/uploads/2019/05/31.05.2019-Festas-juninas-animam-os-brasilienses-nos-meses-de-junho-e-julho-mas-%C3%A9-preciso-ter-cuidado-com-os-fogos-de-artif%C3%ADcio.-Foto-Pedro-Ventura-Ag%C3%AAncia-Bras%C3%ADlia.jpeg" alt="" width="100%">
                    <h6 class="fst-italic">Local: Chácara do Pé de Pano</h6>
                    <h6 class="fst-italic">Data: 23/03/2021</h6>
                    <h6 class="fst-italic">Hora: 16:00 ás 20:00</h6>
                    <div>
                    <a href="#" class="btn btn-danger fst-italic">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body" heigth="50%">
                    <img src="https://agenciabrasilia.df.gov.br/wp-conteudo/uploads/2019/05/31.05.2019-Festas-juninas-animam-os-brasilienses-nos-meses-de-junho-e-julho-mas-%C3%A9-preciso-ter-cuidado-com-os-fogos-de-artif%C3%ADcio.-Foto-Pedro-Ventura-Ag%C3%AAncia-Bras%C3%ADlia.jpeg" alt="" width="100%">
                    <h6 class="fst-italic">Local: Chácara do Pé de Pano</h6>
                    <h6 class="fst-italic">Data: 23/03/2021</h6>
                    <h6 class="fst-italic">Hora: 16:00 ás 20:00</h6>
                    <div>
                    <a href="#" class="btn btn-danger fst-italic">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body" heigth="50%">
                    <img src="https://agenciabrasilia.df.gov.br/wp-conteudo/uploads/2019/05/31.05.2019-Festas-juninas-animam-os-brasilienses-nos-meses-de-junho-e-julho-mas-%C3%A9-preciso-ter-cuidado-com-os-fogos-de-artif%C3%ADcio.-Foto-Pedro-Ventura-Ag%C3%AAncia-Bras%C3%ADlia.jpeg" alt="" width="100%">
                    <h6 class="fst-italic">Local: Chácara do Pé de Pano</h6>
                    <h6 class="fst-italic">Data: 23/03/2021</h6>
                    <h6 class="fst-italic">Hora: 16:00 ás 20:00</h6>
                    <div>
                    <a href="#" class="btn btn-danger fst-italic">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
