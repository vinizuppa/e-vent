<x-app-layout>
    <x-slot name="title">Eventos</x-slot>
    <a href="{{ route('events.create') }}" class="btn btn-primary mb-2"><i class="bi bi-plus-circle"></i> Novo</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-light">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Período</th>
                <th scope="col">Valor inscrição</th>
                <th scope="col">Opções</th>
            </thead>
            <tbody>
                @forelse ($events as $event)
                    <tr>
                        <td>{{ $event->id }}</td>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->startDate() }} - {{ $event->endDate() }} ({{ $event->eventDuration() }})</td>
                        <td>{{ ($event->registration_fee == 0) ? 'Sem taxa' : 'R$ ' . $event->registration_fee }}</td>
                        <td>
                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Atividades">
                                <i class="bi bi-card-checklist"></i>
                                
                            </a>

                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary" data-toggle="tooltip" title="Info">
                                <i class="bi bi-info-circle"></i>
                                
                            </a>
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                <i class="bi bi-pencil"></i>
                                
                            </a>
                            <a href="#" id="btnExcluir" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir" data-event="{{ $event }}" data-route="{{ route('events.destroy', $event->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir">
                                <i class="bi bi-trash"></i>
                                
                            </a>
                            <div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="modalExcluir" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Excluir Evento</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            
                                        </div>
                                        <div class="modal-body">
                                            Deseja excluir o Evento?
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
