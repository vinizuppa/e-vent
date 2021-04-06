<x-app-layout>
    <x-slot name="title">Informações</x-slot>
    <div class="row">
        <div class="col-md-2">            
            <img src="https://gravatar.com/avatar/{{ md5(trim(strtolower($user->email))) }}?s=150&d=https://ui-avatars.com/api/{{ trim(str_replace(' ', '+', $user->name)) }}/150/dc3545/fff/1" alt="Foto {{$user->name}}" class="rounded-circle mx-auto d-block" />
        </div>
        <div class="col-md-10">
            <form class="g-2">
                <div class="mb-3 row">
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="id" value="{{ $user->id }}" disabled>
                    </div>
                    <label for="user" class="col-sm-2 col-form-label">Usuário</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="user" value="{{ $user->username }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="name" value="{{ $user->name }}" disabled>
                    </div>
                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="email" value="{{ $user->email }}" disabled>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</x-app-layout>
