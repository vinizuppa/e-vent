<x-app-layout>
    <x-slot name="title">Inscrições - {{ $event->name }}</x-slot>
    <div class="row g-3">
        @forelse ($subscriptions as $subscription)
            <div class="col-12 col-sm-3 col-lg-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="badge bg-danger mr-2">#{{ $subscription->id }}</span>
                            <span class="badge{{ $subscription->status == 'Pago' ? ' bg-success' : ' bg-warning' }}">{{ $subscription->status }}</span>
                        </h5>
                        <p class="card-text">Data: {{ date('d/m/Y H:i', strtotime($subscription->created_at)) }}</p>
                        <p class="card-text">Participante: {{ $subscription->user->name }}</p>
                        <p class="card-text">Evento: {{ $subscription->event->name }}</p>
                        <p class="card-text">Forma de pagamento: {{ $subscription->payment_type }}</p>
                    </div>
                    <div class="card-footer text-end">
                        @if ($subscription->status == 'Aguardando pagamento')
                            <a href="#" class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirmar pagamento">
                                <i class="fas fa-money-bill-wave"></i>
                            </a>
                        @else
                            <a href="#" class="btn btn-success">
                                <i class="fas fa-check"></i>
                                Pago
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <p class="card-text">Nenhuma inscrição</p>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center mt-4">
                {!! $subscriptions->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
