<x-app-layout>
    <x-slot name="title">Lista de Usuários</x-slot>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-2">Novo</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <th scope="col">ID</th>
                <th scope="col">Usuário</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Grupo</th>
                <th scope="col">Ações</th>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->group }}</td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">
                                Info
                            </a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
                                Editar
                            </a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir">
                                Excluir
                            </button>
                            <div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="modalExcluir" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Excluir usuário</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Deseja excluir o usuário {{ $user->name}}?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                            </form>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Sem dados</td>
                    <tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
