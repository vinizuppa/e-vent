<x-app-layout>
    <x-slot name="title">Usuários</x-slot>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Criado</th>
                <th scope="col">Atualizado</th>
                <th scope="col">Ações</th>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($user->created_at)) }}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($user->updated_at)) }}</td>
                        <td>Info / Editar / Excluir</td>
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
