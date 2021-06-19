<x-app-layout>
    <x-slot name="title">Atividades</x-slot>
    <div class="list-group shadow">
        @foreach ($events as $event)
            <a href="{{ route('events.activities.index', $event) }}" class="list-group-item list-group-item-action">
                <div class="row">
                    <div class="col-11">
                        <h5>{{ $event->name }}</h5>
                    </div>
                    <div class="col-1 text-right">
                        <span class="badge {{ count($event->activities) > 0 ? 'bg-success' : 'bg-danger' }}">
                            {{ count($event->activities) }} atividades
                        </span>
                    </div>
                    <div class="col-12">
                        <p class="mb-1">{{ $event->start_date->isoFormat('L') }} - {{ $event->end_date->isoFormat('L') }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {!! $events->links() !!}
    </div>
</x-app-layout>
