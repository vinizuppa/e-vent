<x-app-layout>
    <x-slot name="title">Configurações</x-slot>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-2">
        <div class="col">
            <a href="{{ route('users.index') }}" class="btn btn-outline-danger p-3 w-100">
                <h5>Todos os usuários</h5>
                <i class="fas fa-users fa-5x"></i>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('users.index', ['adm' => true]) }}" class="btn btn-outline-danger p-3 w-100">
                <h5>Organizadores</h5>
                <i class="fas fa-user-tie fa-5x"></i>
            </a>
        </div>
        <div class="col">
            <a href="#" class="btn btn-outline-danger p-3 w-100">
                <h5>Formas de pagamento</h5>
                <i class="fas fa-dollar-sign fa-5x"></i>
            </a>
        </div>
    </div>
</x-app-layout>
