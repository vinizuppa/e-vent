<x-guest-layout>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <strong>Forma de Pagamento</strong>
            </div>
            <div class="row mt-2 justify-content-center">
                <div class="col-md-8">
                    <div class="position-relative m-4">
                        <div class="progress" style="height: 1px;">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <a href="{{ route('public.events.subscribe', $event->id) }}"><button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button></a>
                        <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                        <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="document_number" class="col-sm-5 col-form-label">Forma de Pagamento</label>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check btn-danger" name="btnradio" id="pix" autocomplete="off" required>
                    <label class="btn btn-outline-danger" for="pix"><i class="fi-xnsuxl-pix"></i>Pix</label>
                    <input type="radio" class="btn-check btn-danger" name="btnradio" id="cartao" autocomplete="off" required>
                    <label class="btn btn-outline-danger" for="cartao"><i class="bi bi-credit-card-2-back-fill"></i> Cartão</label>
                    <input type="radio" class="btn-check btn-danger" name="btnradio" id="manual" autocomplete="off" required>
                    <label class="btn btn-outline-danger" for="manual"><i class="bi bi-cash"></i> Manual</label>
                    </div>
                    <div class="d-flex justify-content-center pt-3">
                        <a href="#" id="btnConfirmar" class="btn btn-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#modalInscrição" data-event="{{ $event }}" data-route="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Desativar">confirmar inscrição <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            {{--Gera o Modal--}}
            <div id="modal"></div>
                <div class="modal fade" id="modalInscrição" tabindex="-1" aria-labelledby="modalExcluir" aria-hidden="true">
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
                            <form id="deleteForm">
                                {{-- @csrf
                                @method('DELETE')
                                --}}
                                <button type="submit" class="btn btn-danger">Confirmar</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
            </div>
            {{--Fim Modal--}}
    </div>

    </div>




</x-guest-layout>
