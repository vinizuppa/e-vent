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
                @if ($subscription->payment_type == 'Pix' && $subscription->status != 'Pago') 
                    <p class="card-text fw-bold">QR Code Pix</p>
                    @if ($payload != '')
                        {!! QrCode::size(200)->generate($payload) !!}
                    @else
                        <p class="card-text">Pix não configurado, tente novamente mais tarde</p>
                    @endif
                @elseif ($subscription->payment_type == 'Manual')
                    <p class="card-text fw-bold">Pagamento manual</p>
                    <p class="card-text">Vá até a secretaria, informe o evento inscrito e apresente o documento e realize o pagamento.</p>
                @endif             
            </div>
            <div class="col-12 col-md-6 text-center my-auto">
                @if ($subscription->status == 'Pago')
                    <h3 class="card-title">Inscrição paga</h3>
                @else              
                    <div class="row">
                        <form action="{{ route('subscriptions.destroy', $subscription) }}" method="post" class="row mb-2">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger w-100">
                                <i class="fas fa-times"></i> Cancelar inscrição
                            </button>
                        </form>                                                                                                                                 
                        @if ($subscription->payment_type == 'Pix')                                                        
                            <div class="row mt-2">
                                <a href="{{ route('subscription.payment', $subscription) }}" class="btn btn-danger w-100">Enviar comprovante de pagamento</a>
                                @if($subscription->image_path != '')                                                                
                                    <img src="{{ Storage::url($subscription->image_path) }}" alt="Comprovante da inscrição {{ $subscription->id }}" class="img-fluid my-2">
                                    <p class="mb-1">Comprovante de pagamento</p>
                                @endif                                                                
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
