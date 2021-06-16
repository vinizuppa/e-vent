<x-app-layout>
    <x-slot name="title">Bem-vindo, {{ $subscriptions[0]->user->name }}!</x-slot>
    <div class="card shadow mb-2">
        <div class="card-body">
            <h3 class="card-title">Suas inscrições</h3>
            <div class="list-group">
                @forelse ($subscriptions as $subscription)
                    <a href="#" class="list-group-item list-group-item-action list-group-item-{{ $subscription->status == 'Pago' ? 'success' : 'warning' }}">
                        <div class="d-flex w-100 justify-content-between">
                            <h4 class="mb-1">{{ $subscription->event->name }}</h4>
                            <small>Inscrito em {{ date('d/m/Y H:i', strtotime($subscription->created_at)) }}</small>
                        </div>
                        <p class="mb-1">Situação: {{ $subscription->status }}</p>
                    </a>
                @empty
                    <a href="#" class="list-group-item list-group-item-action">
                        <p class="mb-1">Sem inscrições</p>
                    </a>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
