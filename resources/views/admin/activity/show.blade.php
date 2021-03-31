<x-app-layout>
    <x-slot name="title">Informações da Atividade</x-slot>
    <form class="row g-2">
        <div class="mb-3 row">
            <label for="id" class="col-sm-1 col-form-label">ID: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="id" value="{{ $activity->id }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-1 col-form-label">Nome: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="name" value="{{ $activity->name }}" disabled>
            </div>
        </div>        
        <div class="mb-3 row">
            <label for="description" class="col-sm-1 col-form-label">Descrição: </label>
            <div class="col-sm-3">
                <textarea class="form-control" id="description" disabled>{{ $activity->description }}</textarea>
            </div>
        </div>
        <div class="mb-3 row ">
            <label for="type" class="col-sm-1 col-form-label">Tipo: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="type" value="{{ $activity->type }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="place" class="col-sm-1 col-form-label">Local: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="place" value="{{ $activity->place }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="vacancies" class="col-sm-1 col-form-label">Vagas: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="vacancies" value="{{ $activity->vacancies }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="instructions" class="col-sm-1 col-form-label">Instruções: </label>
            <div class="col-sm-3">
                <textarea class="form-control" id="description" disabled>{{ $activity->instructions }}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="responsible" class="col-sm-1 col-form-label">Responsável: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="responsible" value="{{ $activity->responsible }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="startDate" class="col-sm-1 col-form-label">Início: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="startDate" value="{{ $activity->startDate() }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="endDate" class="col-sm-1 col-form-label">Fim: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="endDate" value="{{ $activity->endDate() }}" disabled>
            </div>
        </div>
    </form>
</x-app-layout>
