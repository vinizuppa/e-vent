<x-guest-layout>
    <div class="container">
        <div class="card shadow mb-2 p-4 text-center">
            <div class="row">
                <div class="col-6">
                    <img src="{{ count($event->images) > 0 ? Storage::url($event->images[0]->path) : asset('img/event/default.jpg') }}" alt="{{ $event->name }}" class="rounded mb-2 w-100 mx-auto d-block">
                    <h3 class="card-title">{{ $event->name }}</h3>
                    <p class="card-text">Endereço: {{ $event->address }}</p>
                    <p class="card-text">Período: {{ $event->start_date->isoFormat('L') }} - {{ $event->end_date->isoFormat('L') }}</p>
                    <p class="card-text">Valor inscrição: R${{ $event->registration_fee }}</p>
                </div>
                <div class="col-6">
                    <div class="row mb-2">
                        <div class="col-6">
                            <img src="https://gravatar.com/avatar/{{ md5(trim(strtolower($user->email))) }}?s=180&d=https://ui-avatars.com/api/{{ trim(str_replace(' ', '+', $user->name)) }}/180/dc3545/fff/1" alt="{{ $user->name }}" class="rounded-circle mx-auto d-block">
                        </div>
                        <div class="col-6">
                            <h3 class="card-title">{{ $user->name }}</h3>
                            <p class="card-text">E-mail: {{ $user->email }}</p>
                            <p class="card-text">Telefone: {{ $user->phone }}</p>
                            <p class="card-text">Documento: {{ $user->document_name }} - {{ $user->document_number }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="card-title">Forma de pagamento</h3>
                        <form action="#" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row px-3 pt-2">
                                <div class="btn-group" role="group">
                                    <input type="radio" class="btn-check btn-danger" name="btnradio" id="pix" value ="pix" autocomplete="off" required>
                                    <label class="btn btn-outline-danger" for="pix"><i class="fi-xnsuxl-pix"></i>Pix</label>
                                    <input type="radio" class="btn-check btn-danger" name="btnradio" id="manual" value ="manual" autocomplete="off" required>
                                    <label class="btn btn-outline-danger" for="manual"><i class="bi bi-cash"></i> Manual</label>
                                </div>
                                <input type="hidden" name="event" value="{{ $event }}">
                                <input type="hidden" name="user" value="{{ $user }}">
                            </div>
                        </form>
                        <button type="button" class="btn btn-danger text-uppercase" data-bs-toggle="modal" data-bs-target="#modalInserir" data-event="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Desativar">
                            Confirmar inscrição <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
