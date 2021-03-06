<x-guest-layout>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Home Participante - public
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
