<x-guest-layout>
    <div class="container">
        <div class="card shadow mb-2 p-4 text-center">
            <div class="row">
                <div class="col-6 my-auto">                    
                    <img src="{{ $event->image_path != '' ? Storage::url($event->image_path) : asset('img/event/default.jpg') }}" alt="{{ $event->name }}" class="rounded mb-2 w-100 mx-auto d-block">
                    <h3 class="card-title">{{ $event->name }}</h3>
                    <p class="card-text"><strong>Endereço:</strong> {{ $event->address }}</p>
                    <p class="card-text"><strong>Período:</strong> {{ $event->start_date->isoFormat('L') }} - {{ $event->end_date->isoFormat('L') }}</p>
                    <p class="card-text"><strong>Valor inscrição:</strong> {{ $event->registration_fee > 0 ? 'R$ ' . $event->registration_fee : 'Gratuito' }}</p>                
                </div>
                <div class="col-6 my-auto">                    
                    <div class="row mb-2">
                        <div class="col-6">
                            <img src="https://gravatar.com/avatar/{{ md5(trim(strtolower($user->email))) }}?s=180&d=https://ui-avatars.com/api/{{ trim(str_replace(' ', '+', $user->name)) }}/180/dc3545/fff/1" alt="{{ $user->name }}" class="rounded-circle mx-auto d-block">
                        </div>
                        <div class="col-6">
                            <h3 class="card-title">{{ $user->name }}</h3>
                            <p class="card-text"><strong>E-mail:</strong> {{ $user->email }}</p>
                            <p class="card-text"><strong>Telefone:</strong> {{ $user->phone }}</p>
                            <p class="card-text"><strong>Documento:</strong> {{ $user->document_name }} - {{ $user->document_number }}</p>
                        </div>
                    </div>
                    <hr class="bg-danger m-4">
                    <div class="row">                        
                        <form action="{{ route('public.subscription.store', $event) }}" method="post">
                            @csrf
                            @if ($event->registration_fee > 0)
                                <div class="row">
                                    <h3 class="card-title">Forma de pagamento</h3>
                                </div>
                                <div class="mb-3 row px-3 pt-2">                                    
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check btn-danger" name="paymentType" id="pix" value="Pix" autocomplete="off" required>
                                        <label class="btn btn-outline-danger" for="pix"><i class="fi-xnsuxl-pix"></i>Pix</label>
                                        <input type="radio" class="btn-check btn-danger" name="paymentType" id="manual" value="Manual" autocomplete="off" required>
                                        <label class="btn btn-outline-danger" for="manual"><i class="bi bi-cash"></i> Manual</label>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <button type="submit" class="btn btn-danger text-uppercase">
                                    Confirmar inscrição
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
