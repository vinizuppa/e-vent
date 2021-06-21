<x-app-layout>
    <x-slot name="title">Bem-vindo, {{ auth()->user()->name }}!</x-slot>
    <div class="card shadow mb-2">
        <div class="card-body">
            <h3 class="card-title">Suas inscrições</h3>
            <div class="list-group">
                @forelse ($subscriptions as $subscription)
                    <a href="{{ route('subscriptions.show', $subscription) }}" class="list-group-item list-group-item-action list-group-item-{{ $subscription->status == 'Pago' ? 'success' : 'warning' }}">
                        <div class="d-flex w-100 justify-content-between">
                            <h4 class="mb-1">{{ $subscription->event->name }}</h4>
                            <small>Inscrito {{ $subscription->created_at->diffForHumans() }}</small>
                        </div>
                        <p class="mb-1"><strong>Situação:</strong> {{ $subscription->status }}</p>
                        <p class="mb-1"><strong>Forma de pagamento:</strong> {{ $subscription->payment_type }}</p>
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
