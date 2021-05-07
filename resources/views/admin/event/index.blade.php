<x-app-layout>
    <x-slot name="title">Eventos</x-slot>
    <x-slot name="cardHeader">
        <a href="{{ route('events.create') }}" class="btn btn-outline-success">
            <i class="fas fa-plus"></i>
        </a>
    </x-slot>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-2">
        @forelse ($events as $event)
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="badge bg-danger mr-2">#{{ $event->id }}</span>
                            {{ $event->name }}
                        </h5>
                        <p class="card-text">Início: {{ $event->startDate() }}</p>
                        <p class="card-text">Fim: {{ $event->endDate() }}</p>
                        <p class="card-text">{{ $event->registration_fee == 0 ? 'Gratuito' : 'Valor inscrição: R$ ' . $event->registration_fee }}</p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ route('events.activities.index', $event) }}" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Atividades">
                            <i class="fas fa-list-alt"></i>
                        </a>
                        <a href="{{ route('events.show', $event) }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Info">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="{{ route('events.edit', $event) }}" class="btn btn-warning" style="color: white" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="#" id="btnExcluir" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir" data-event="{{ $event }}" data-route="{{ route('events.destroy', $event->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Desativar">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p>Sem eventos cadastrados</p>
        @endforelse
    </div>
    <div class="d-flex justify-content-center mt-4">
        {!! $events->links() !!}
    </div>
    <div id="modal"></div>
    <div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="modalExcluir" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Excluir</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseja excluir o evento?
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
            var event = JSON.parse(button.getAttribute('data-event'));
            var route = button.getAttribute('data-route');
            var textoModal = document.getElementsByClassName('modal-body')[0];
            textoModal.textContent = "Deseja excluir o evento " + event.name + "?";
            var form = document.getElementById('deleteForm');
            form.setAttribute('action', route);
        });
    </script>
</x-app-layout>
