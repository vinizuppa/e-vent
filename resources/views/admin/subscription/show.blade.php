<x-app-layout>
    <x-slot name="title">Inscrição</x-slot>
    <div class="card shadow mb-2 p-2">
        <div class="row">
            <div class="col-12 col-md-6 text-center my-auto">
                <h3 class="card-title">{{ $subscription->event->name }}</h3>
                <p class="card-text"><strong>Data inscrição:</strong> {{ $subscription->created_at->isoFormat('L') }}</p>
                <p class="card-text"><strong>Forma de pagamento:</strong> {{ $subscription->payment_type }}</p>
                <p class="card-text"><strong>Valor:</strong> {{ $subscription->event->registration_fee > 0 ? 'R$ ' . $subscription->event->registration_fee : 'Gratuito' }}</p>
                <p class="card-text"><strong>Situação:</strong> {{ $subscription->status }}</p>                
            </div>
            <div class="col-12 col-md-6 text-center my-auto">
                @if ($subscription->status == 'Pago')
                    <a href="#" class="btn btn-outline-danger">Inscrever em atividades</a>
                @else              
                    <div class="row">
                        <form action="{{ route('subscriptions.destroy', $subscription) }}" method="post" class="row mb-2">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger w-100">
                                <i class="fas fa-times"></i> Cancelar inscrição
                            </button>
                        </form>                                                                                                         
                        @if ($subscription->payment_type == 'Manual')
                            <p class="card-text fw-bold">Guia pagamento</p>
                            <div class="row">
                                <a href="#" class="btn btn-outline-danger w-100">Exibir guia</a>
                            </div>
                        @else
                            <div class="row">
                                <a href="#" class="btn btn-danger w-100">Enviar comprovante de pagamento</a>
                            </div>
                            <p class="card-text fw-bold">QR Code Pix</p>
                            @if ($payload != '')
                                {!! QrCode::size(200)->generate($payload) !!}
                            @else
                                <p class="card-text">Pix não configurado, tente novamente mais tarde</p>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
