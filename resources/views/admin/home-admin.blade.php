<x-app-layout>
    <x-slot name="title">Bem-vindo, {{ $user->name }}!</x-slot>
    <div class="card shadow mb-2">
        <div class="card-body">
            <h2 class="card-title">Informações</h2>
            <div class="row m-2">
                <div class="col-12 col-md-3">
                    <a href="{{ route('events.index') }}" class="btn btn-outline-danger p-3 w-100">
                        <h5>{{ $events }} eventos</h5>
                        <i class="fas fa-calendar-alt fa-5x"></i>
                    </a>
                </div>
                <div class="col-12 col-md-3">
                    <a href="{{ route('events.index') }}" class="btn btn-outline-danger p-3 w-100">
                        <h5>{{ $activities }} atividade{{ $activities > 1 ? 's' : '' }}</h5>
                        <i class="fas fa-calendar-alt fa-5x"></i>
                    </a>
                </div>
                <div class="col-12 col-md-3">
                    <a href="{{ route('users.index') }}" class="btn btn-outline-danger p-3 w-100">
                        <h5>{{ $participants }} participante{{ $participants > 1 ? 's' : '' }}</h5>
                        <i class="fas fa-users fa-5x"></i>
                    </a>
                </div>
                <div class="col-12 col-md-3">
                    <a href="{{ route('admin.subscriptions') }}" class="btn btn-outline-danger p-3 w-100">
                        <h5>{{ $subscriptions }} inscriç{{ $subscriptions > 1 ? 'ões' : 'ão' }}</h5>
                        <i class="fas fa-list fa-5x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
