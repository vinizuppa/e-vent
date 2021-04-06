<x-app-layout>
    <x-slot name="title">Atividades</x-slot>
    <a href="{{ route('events.activities.create', $event) }}" class="btn btn-primary mb-2"><i class="bi bi-plus-circle"></i> Novo</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-light">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Periodo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Vagas</th>
                <th scope="col">Opções</th>
            </thead>
            <tbody>
                @forelse ($activities as $activity)
                    <tr>
                        <td>{{ $activity->id }}</td>
                        <td>{{ $activity->name }}</td>
                        <td>{{ $activity->startDate() }} - {{ $activity->endDate() }} ({{ $activity->activityDuration() }})</td>
                        <td>{{ $activity->type }}</td>
                        <td>{{ $activity->vacancies }}</td>
                        <td>
                            <a href="{{ route('activities.show', $activity->id) }}" class="btn btn-primary" data-toggle="tooltip" title="Info">
                                <i class="bi bi-info-circle"></i>
                            </a>
                            <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" id="btnExcluir" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir" data-activity="{{ $activity }}" data-route="{{ route('activities.destroy', $activity) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir">
                                <i class="bi bi-trash"></i>
                            </a>
                            <div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="modalExcluir" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Excluir Atividade</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Deseja excluir a Atividade?
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
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Sem dados</td>
                    <tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $activities->links() !!}
        </div>
    </div>
    <script>
        var modalExcluir = document.getElementById('modalExcluir');
        if(modalExcluir) {
            modalExcluir.addEventListener('show.bs.modal', function (activity) {
                var button = activity.relatedTarget;
                var activity = JSON.parse(button.getAttribute('data-activity'));
                var route = button.getAttribute('data-route');
                var textoModal = document.getElementsByClassName('modal-body')[0];
                textoModal.textContent = "Deseja excluir a atividade " + activity.name + "?";
                var form = document.getElementById('deleteForm');
                form.setAttribute('action', route);
            });
        }
    </script>
</x-app-layout>
