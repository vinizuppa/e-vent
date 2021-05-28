<x-app-layout>
    <x-slot name="title">Inscrições - {{ $event->name }}</x-slot>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-2">
        @forelse ($registrations as $registration)
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="badge bg-danger mr-2">#{{ $registration->id }}</span>
                            {{ $registration->status }}
                        </h5>
                        <p class="card-text">Participante: {{ $registration->user->name }}</p>
                    </div>
                </div>
            </div>
        @empty
            <h5>Nenhuma inscrição</h5>
        @endforelse
    </div>
    <div class="d-flex justify-content-center mt-4">
        {!! $registrations->links() !!}
    </div>
</x-app-layout>
