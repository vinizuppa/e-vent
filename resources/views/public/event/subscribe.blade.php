<x-guest-layout>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <strong>Informações de Participante e Evento</strong>
            </div>
            <div class="row mt-2 px-3 g-2">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header text-center">
                            <strong>Informações do Evento</strong>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><i class="mx-2 bi bi-bookmark-star-fill text-danger"></i><strong class="text-danger">Nome do Evento: </strong>{{ $event->name }}</p>
                            <p class="card-text"><i class="mx-2 bi bi-geo-alt-fill text-danger"></i><strong class="text-danger">Endereço: </strong> {{ $event->address }}</p>
                            <p class="card-text"><i class="mx-2 bi bi-calendar2-check-fill text-danger"></i><strong class="text-danger">Inicio: </strong>{{ $event->startDate() }}</p>
                            <p class="card-text"><i class="mx-2 bi bi-calendar2-x-fill text-danger"></i><strong class="text-danger">Fim: </strong>{{ $event->endDate()  }}</p>
                            <p class="card-text"><i class="mx-2 text-danger"><i class="fas fa-money-bill-wave"></i></i><strong class="text-danger">Valor inscrição: </strong>{{ $event->registration_fee }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header text-center">
                            <strong>Informações do Participante</strong>
                        </div>
                        <div class="card-body">
                                 <p class="card-text"><i class="mx-2 bi bi bi-person-circle text-danger"></i><strong class="text-danger">Nome do Participante: </strong>{{ Auth::user()->name  }}</p>
                                <p class="card-text"><i class="mx-2 bi bi-envelope-fill text-danger"></i><strong class="text-danger">E-mail: </strong> {{ Auth::user()->email }}</p>
                                <p class="card-text"><i class="mx-2 bi-telephone-fill text-danger"></i><strong class="text-danger">Telefone: </strong>{{ Auth::user()->phone }}</p>
                                <p class="card-text"><i class="mx-2 text-danger"><i class="fas fa-id-card"></i></i><strong class="text-danger">Documento: </strong>{{ Auth::user()->document_name }}</p>
                                <p class="card-text"><i class="mx-2 text-danger"><i class="fas fa-sort-numeric-up"></i></i><strong class="text-danger">Número Documento: </strong>{{ Auth::user()->document_number }}</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 justify-content-center pt-3 px-3">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header text-center">
                                <strong>Forma de Pagamento</strong>
                            </div>
                            <form action="#" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row px-3 pt-2">
                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check btn-danger" name="btnradio" id="pix" value ="pix" autocomplete="off" required>
                                            <label class="btn btn-outline-danger" for="pix"><i class="fi-xnsuxl-pix"></i>Pix</label>
                                            <input type="radio" class="btn-check btn-danger" name="btnradio" id="cartao" value ="cartao" autocomplete="off" required>
                                            <label class="btn btn-outline-danger" for="cartao"><i class="bi bi-credit-card-2-back-fill"></i> Cartão</label>
                                            <input type="radio" class="btn-check btn-danger" name="btnradio" id="manual" value ="manual" autocomplete="off" required>
                                            <label class="btn btn-outline-danger" for="manual"><i class="bi bi-cash"></i> Manual</label>
                                        </div>
                                        <input type="hidden" name="event" value="{{ $event}}">
                                        <input type="hidden" name="user" value="{{ Auth::user() }}">
                                </div>
                            </form>
                </div>
                <div class="d-flex justify-content-center pt-3 py-3">
                    <button type="button" id="btnConfirmar" class="btn btn-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#modalInserir" data-event="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Desativar">confirmar inscrição <i class="fas fa-arrow-right"></i></button>
                </div>
                {{--Gera o Modal--}}
                <div id="modal">
                    <div class="modal fade" id="modalInserir" tabindex="-1" aria-labelledby="modalInserir" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title">Inscrever-se</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Confirma inscrição no evento: <strong>{{$event->name}}</strong>?

                            </div>
                            <div class="modal-footer">
                                <form id="insertForm">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-danger">Confirmar</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Fim Modal--}}

            </div>
        </div>
    </div>
    <script>
            var modalInserir = document.getElementById('modalInserir');
            modalInserir.addEventListener('show.bs.modal', function (subscription) {
            var button = subscription.relatedTarget;
            var event = JSON.parse(button.getAttribute('data-event'));
            var form = document.getElementById('insertForm');
        });
    </script>
</x-guest-layout>
