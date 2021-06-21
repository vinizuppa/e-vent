<x-app-layout>
    <x-slot name="title">Inscrições</x-slot>
    <div class="row mb-2">
        <div class="col">
            <div class="card shadow p-2">
                <p class="card-text"><span class="badge bg-secondary">&nbsp;</span> Eventos finalizados</p>
            </div>
        </div>
    </div>
    <div class="list-group shadow">
        @foreach ($events as $event)
            <a href="{{ route('events.subscriptions.index', $event) }}" class="list-group-item list-group-item-action{{ $event->end_date <= now() ? ' list-group-item-secondary' : '' }}">
                <div class="row">
                    <div class="col-11">
                        <h5>{{ $event->name }}</h5>
                    </div>
                    <div class="col-1 text-right">
                        <span class="badge {{ count($event->subscriptions) > 0 ? 'bg-success' : 'bg-danger' }}">
                            {{ count($event->subscriptions) }} inscrições
                        </span>
                    </div>
                    <div class="col-12">
                        <p class="mb-1">{{ $event->start_date->isoFormat('L HH:mm') }} - {{ $event->end_date->isoFormat('L HH:mm') }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {!! $events->links() !!}
    </div>
</x-app-layout>
