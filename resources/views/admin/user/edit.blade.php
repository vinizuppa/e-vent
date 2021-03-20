<x-app-layout>
    <x-slot name="title">Editar Usuário</x-slot>
    <form action="{{ route('users.update', [$user->id]) }}" method="post" class="row g-3">
        @method('PUT')
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
            @error('name')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
            @error('email')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="username" class="form-label">Usuário</label>
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" autocomplete="username">
            @error('username')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Telefone (com DDD)</label>
            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" autocomplete="phone">
            @error('phone')
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
