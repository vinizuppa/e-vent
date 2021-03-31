<x-app-layout>
    <x-slot name="title">Informações do Usuário</x-slot>
    <form class="row g-2">
        <div class="mb-3 row">
            <label for="id" class="col-sm-1 col-form-label">ID: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="id" value="{{ $user->id }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-1 col-form-label">Nome: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="name" value="{{ $user->name }}" disabled>
            </div>
        </div>        
        <div class="mb-3 row">
            <label for="user" class="col-sm-1 col-form-label">Usuário: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="user" value="{{ $user->username }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-1 col-form-label">E-mail: </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="email" value="{{ $user->email }}" disabled>
            </div>
        </div>
    </form>
</x-app-layout>
