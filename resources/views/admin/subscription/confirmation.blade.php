<x-app-layout>
    <x-slot name="title">Confirmar pagamento inscrição</x-slot>
    <div class="card shadow mb-2">
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-6 text-center my-auto">
                    @if($subscription->image_path != '')
                        <img src="{{ Storage::url($subscription->image_path) }}" alt="Comprovante da inscrição {{ $subscription->id }}" class="img-fluid my-2">
                        <p class="card-text">Comprovante de pagamento</p>
                    @else
                        <p class="card-text">Sem comprovante</p>                                                                                            
                    @endif
                    <p class="card-text"><strong>Evento:</strong> {{ $subscription->event->name }}</p>
                    <p class="card-text"><strong>Participante:</strong> {{ $subscription->user->name }}</p>
                    <p class="card-text"><strong>Inscrito:</strong> {{ $subscription->created_at->isoFormat('LLL') }}</p>
                </div>
                <div class="col-6 my-auto">
                    <h3 class="card-title">Confirmar pagamento?</h3>
                    <form action="{{ route('subscription.confirmation.store', $subscription) }}" method="post" class="row g-3">
                        @csrf
                        @method('PUT')                                                
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Confirmar</button>
                            <a href="{{ route('events.subscriptions.index', $subscription->event) }}" class="btn btn-danger">Cancelar</a>
                        </div>                
                    </form>
                </div>
            </div>                                            
        </div>
    </div>    
</x-app-layout>