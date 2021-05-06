<x-app-layout>
    <x-slot name="title">Novo</x-slot>
    <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label">Nome</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="description" class="form-label">Descrição</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required rows="2">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Endereço</label>
            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}">
            @error('address')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="registration_fee" class="form-label">Valor inscrição</label>
            <input id="registration_fee" type="number" min="0" max="1000" class="form-control @error('registration_fee') is-invalid @enderror" name="registration_fee" value="{{ old('registration_fee') }}">
            @error('registration_fee')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="start_date" class="form-label">Data/Hora Inicial</label>
            <input id="start_date" type="datetime-local" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}">
            @error('start_date')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="end_date" class="form-label">Data/Hora Final</label>
            <input id="end_date" type="datetime-local" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date') }}">
            @error('end_date')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Telefone (com DDD)</label>
            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="image" class="form-label">Imagem</label>
            <input id="image" type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</x-app-layout>
