<x-app-layout>
    <x-slot name="title">Informações</x-slot>
    <div class="card shadow mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gravatar.com/avatar/{{ md5(trim(strtolower($user->email))) }}?s=180&d=https://ui-avatars.com/api/{{ trim(str_replace(' ', '+', $user->name)) }}/180/dc3545/fff/1" alt="Foto {{$user->name}}" class="rounded-circle mx-auto d-block" />
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="card-title">{{ $user->name }}</h2>
                            <p class="card-text">E-mail: {{ $user->email }}</p>
                            <p class="card-text">Grupo: {{ $user->group }}</p>
                            <p class="card-text">Telefone: {{ $user->phone }}</p>
                            @if ($user->group == 'Participante')
                                <p class="card-text">Documento: {{ $user->document_name }} - {{ $user->document_number }}</p>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-warning w-100 my-2">
                                <i class="fas fa-pencil-alt"></i>
                                Editar
                            </a>
                            <a href="#" class="btn btn-warning w-100 my-2">
                                <i class="fas fa-envelope"></i>
                                Alterar e-mail
                            </a>
                            <a href="#" class="btn btn-warning w-100 my-2">
                                <i class="fas fa-key"></i>
                                Alterar senha
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
