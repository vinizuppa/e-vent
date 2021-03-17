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
                        <td class="gt-1">
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">Info</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
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
