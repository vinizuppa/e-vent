<x-app-layout>
    <x-slot name="title">Comprovante pagamento inscrição</x-slot>
    <div class="card shadow mb-2">
        <div class="card-body">
            <div class="row mb-2">                
                <small>* campos obrigatórios</small>                
            </div>
            <form action="{{ route('subscription.payment.store', $subscription) }}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                @method('PUT')                
                <div class="col-6">
                    <label for="payment" class="form-label">Comprovante pagamento (imagem) *</label>
                    <input 
                        type="file" 
                        name="payment" 
                        class="form-control @error('payment') is-invalid @enderror"                    
                        required>
                    @error('payment')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>                
            </form>
        </div>
    </div>    
</x-app-layout>