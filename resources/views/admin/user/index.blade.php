<x-app-layout>
    <x-slot name="title">Usuários</x-slot>
    <x-slot name="cardHeader">
        <a href="{{ route('users.create') }}" class="btn btn-outline-success">
            <i class="fas fa-plus"></i>
        </a>
    </x-slot>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-2">
        @forelse ($users as $user)
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="badge bg-danger mr-2">#{{ $user->id }}</span>
                            {{ $user->name }}
                        </h5>
                        <p class="card-text">E-mail: {{ $user->email }}</p>
                        <p class="card-text">Usuário: {{ $user->username }}</p>
                    </div>
                    <div class="card-footer text-end">
                        <p class="card-text text-muted text-end text-uppercase">
                            <i class="fas {{ $user->group == 'Participante' ? 'fa-users' : 'fa-user-tie' }}"></i>
                            {{ $user->group }}
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <p>Sem usuários cadastrados</p>
        @endforelse
    </div>
    <div class="d-flex justify-content-center mt-4">
        {!! $users->links() !!}
    </div>
    <div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="modalExcluir" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseja excluir o usuário?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var modalExcluir = document.getElementById('modalExcluir');
        modalExcluir.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var user = JSON.parse(button.getAttribute('data-bs-user'));
            var route = button.getAttribute('data-bs-route');
            var textoModal = document.getElementsByClassName('modal-body')[0];
            textoModal.textContent = "Deseja excluir o usuário " + user.name + "?";
            var form = document.getElementById('deleteForm');
            form.setAttribute('action', route);
        });
    </script>
</x-app-layout>
