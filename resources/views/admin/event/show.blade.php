<x-app-layout>
    <x-slot name="title">Informações</x-slot>
    <div class="row">
        <div class="col-md-4">
            @forelse ($event->images as $image)
                <div class="row">
                    <img src="{{ Storage::url($image->path) }}" alt="{{ $event->name }}" class="img-responsive">
                </div>
            @empty
                <div class="row">
                    <img src="{{ asset("img/event/default.jpg") }}" alt="Imagem de exemplo" class="img-responsive">
                    <small>* Imagem de exemplo</small>
                </div>
            @endforelse
        </div>
        <div class="col-md-8">
            <form class="g-2">
                <div class="mb-3 row">
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" value="{{ $event->id }}" disabled>
                    </div>
                    <label for="name" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{ $event->name }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="col-sm-2 col-form-label">Descrição</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" disabled>{{ $event->description }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="address" class="col-sm-2 col-form-label">Endereço</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" value="{{ $event->address }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="phone" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="phone" value="{{ $event->phone }}" disabled>
                    </div>
                    <label for="registration_fee" class="col-sm-2 col-form-label">Valor inscrição</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-text">R$</span>
                            <input type="text" class="form-control" id="registration_fee" value="{{ $event->registration_fee }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="start_date" class="col-sm-2 col-form-label">Início</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="start_date" value="{{ $event->startDate() }}" disabled>
                    </div>
                    <label for="end_date" class="col-sm-2 col-form-label">Fim</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="end_date" value="{{ $event->endDate() }}" disabled>
                    </div>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>
