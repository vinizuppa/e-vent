<x-app-layout>
    <x-slot name="title">Atividades - {{ $event->name }}</x-slot>
    <x-slot name="cardHeader">
        <a href="{{ route('events.activities.create', $event) }}" class="btn btn-outline-success">
            <i class="fas fa-plus"></i>
        </a>
    </x-slot>
    <div class="row g-2">
        @forelse ($activities as $activity)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="badge bg-danger mr-2">#{{ $activity->id }}</span>
                            {{ $activity->name }}
                        </h5>
                        <p class="card-text">Início: {{ $activity->startDate() }}</p>
                        <p class="card-text">Final: {{ $activity->endDate() }}</p>
                        <p class="card-text">Tipo: {{ $activity->type }}</p>
                        <p class="card-text">Vagas: {{ $activity->vacancies }}</p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ route('activities.show', $activity) }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Info">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="{{ route('activities.edit', $activity) }}" class="btn btn-warning" style="color: white" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="#" id="btnExcluir" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir" data-activity="{{ $activity }}" data-route="{{ route('activities.destroy', $activity->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <p class="card-text">Sem atividades cadastradas</p>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
    <div class="d-flex justify-content-center mt-4">
        {!! $activities->links() !!}
    </div>
    <div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="modalExcluir" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseja excluir a atividade?
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
