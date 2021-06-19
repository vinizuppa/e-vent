<x-app-layout>
    <x-slot name="title">Bem-vindo, {{ $user->name }}!</x-slot>
    <div class="card shadow mb-2">
        <div class="row m-2 g-2">
            <div class="col-12 col-md-3">
                <a href="{{ route('events.index') }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>{{ $events == 0 ? 'Nenhum' : $events }} evento{{ $events > 1 ? 's' : '' }}</h5>
                    <i class="fas fa-calendar-alt fa-5x"></i>
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a href="{{ route('admin.activities') }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>{{ $activities == 0 ? 'Nenhuma' : $activities }} atividade{{ $activities > 1 ? 's' : '' }}</h5>
                    <i class="fas fa-file-signature fa-5x"></i>
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a href="{{ route('admin.subscriptions') }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>{{ $subscriptions == 0 ? 'Nenhuma' : $subscriptions }} inscriç{{ $subscriptions > 1 ? 'ões' : 'ão' }}</h5>
                    <i class="fas fa-list fa-5x"></i>
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a href="{{ route('users.index') }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>Todos os usuários</h5>
                    <i class="fas fa-users fa-5x"></i>
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a href="{{ route('users.index', ['group' => 'organizer']) }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>{{ $organizers == 0 ? 'Nenhum' : $organizers }} organizador{{ $organizers > 1 ? 's' : '' }}</h5>
                    <i class="fas fa-user-tie fa-5x"></i>
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a href="{{ route('users.index', ['group' => 'participant']) }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>{{ $participants == 0 ? 'Nenhum' : $participants }} participante{{ $participants > 1 ? 's' : '' }}</h5>
                    <i class="fas fa-user fa-5x"></i>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
