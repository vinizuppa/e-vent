<x-app-layout>
    <x-slot name="title">Configurações</x-slot>
    <x-slot name="cardHeader">
        <a href="{{ route('configurations.create') }}" class="btn btn-danger">
            <i class="fas fa-pencil-alt"></i>
        </a>
    </x-slot>
    <div class="card shadow mb-2 p-2">
        <div class="row">
            <div class="col-12 col-md-6 text-center my-auto">
                @forelse ($configurations as $configuration)
                    <p class="card-text"><strong>{{ $configuration->label }}:</strong> {{ $configuration->value == '' ? '---' : $configuration->value }}</p>
                @empty
                    <p class="card-text">Sem configurações cadastradas</p>
                @endforelse
            </div>
            <div class="col-12 col-md-6 text-center my-auto">
                <div class="row">
                    @if ($payload == '')
                        <p class="card-text text-uppercase">Edite as configurações para gerar o QR Code.</p>
                    @else
                        {!! QrCode::size(200)->generate($payload) !!}
                    @endif
                </div>
                <div class="row">
                    <p class="card-text">
                        Faça um teste do pagamento Pix via QR Code para confirmar as informações.<br>
                        Será cobrado o valor de R$0,01.
                    </p>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
