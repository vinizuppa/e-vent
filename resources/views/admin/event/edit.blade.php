<x-app-layout>
    <x-slot name="title">Editar Usuário</x-slot>
    <form action="{{ route('events.update', [$event->id]) }}" method="post" class="row g-3">
        @method('PUT')
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="description" class="form-label">Descrição</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required rows="2"></textarea>
            @error('description')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Endereço</label>
            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address">
            @error('address')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="registration_fee" class="form-label">Valor Inscrição R$</label>
        <input id="registration_fee" type="text" class="form-control @error('registration_fee') is-invalid @enderror" name="registration_fee" registration_fee="{{ old('registration_fee') }}" autocomplete="registration_fee" onkeyup="formatarMoeda(this);">
            @error('registration_fee')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="start_date" class="form-label">Data Hora Inicial</label>
            <input id="start_date" type="datetime-local" class="form-control @error('start_date') is-invalid @enderror" name="start_date" start_date="{{ old('start_date') }}" autocomplete="start_date">
            @error('start_date')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        
        <div class="col-md-6">
            <label for="end_date" class="form-label">Data Hora Final</label>
            <input id="end_date" type="datetime-local" class="form-control @error('end_date') is-invalid @enderror" name="end_date" end_date="{{ old('end_date') }}" autocomplete="end_date">
            @error('end_date')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="phone" class="form-label">Telefone (com DDD)</label>
            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
        </div>
    </form>

</x-app-layout>
