<x-app-layout>
    <x-slot name="title">Inscrição - {{ $subscription->event->name }}</x-slot>
    <div class="card shadow mb-2 p-2">
        <div class="row">
            <div class="col-12 col-md-6 text-center my-auto">
                <p class="card-text"><strong>Data inscrição:</strong> {{ $subscription->created_at->isoFormat('L') }}</p>
                <p class="card-text"><strong>Forma de pagamento:</strong> {{ $subscription->payment_type }}</p>
                <p class="card-text"><strong>Valor:</strong> R${{ $subscription->event->registration_fee }}</p>
                <p class="card-text"><strong>Situação:</strong> {{ $subscription->status }}</p>
            </div>
            <div class="col-12 col-md-6 text-center my-auto">
                @if ($subscription->status == 'Pago')
                    <a href="#" class="btn btn-outline-danger">Inscrever em atividades</a>
                @else
                    <form action="{{ route('subscriptions.destroy', $subscription) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i>Cancelar inscrição</button>
                    </form>
                    @if ($subscription->payment_type == 'Manual')
                        <p class="card-text fw-bold">Guia pagamento</p>
                        <a href="#" class="btn btn-outline-danger">Exibir guia</a>
                    @else
                        <p class="card-text fw-bold">QR Code Pix</p>
                        {!! QrCode::size(200)->generate($payload) !!}
                    @endif
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
