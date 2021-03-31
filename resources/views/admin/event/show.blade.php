<x-app-layout>
    <x-slot name="title">Informações do Evento</x-slot>
    <form class="row g-2">
        <div class="mb-3 row">
            <label for="id" class="col-sm-1 col-form-label">ID: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="id" value="{{ $event->id }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-1 col-form-label">Nome: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="name" value="{{ $event->name }}" disabled>
            </div>
        </div>        
        <div class="mb-3 row">
            <label for="description" class="col-sm-1 col-form-label">Descrição: </label>
            <div class="col-sm-3">
                <textarea class="form-control" id="description" disabled>{{ $event->description }}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="address" class="col-sm-1 col-form-label">Endereço: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="address" value="{{ $event->address }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="phone" class="col-sm-1 col-form-label">Telefone: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="phone" value="{{ $event->phone }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="registration_fee" class="col-sm-1 col-form-label">Valor: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="registration_fee" value="{{ $event->registration_fee }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="start_date" class="col-sm-1 col-form-label">Início: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="start_date" value="{{ $event->start_date }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="end_date" class="col-sm-1 col-form-label">Fim: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="end_date" value="{{ $event->end_date }}" disabled>
            </div>
        </div>
    </form>
</x-app-layout>
