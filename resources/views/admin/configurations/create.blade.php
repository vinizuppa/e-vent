<x-app-layout>
    <x-slot name="title">Editar configurações</x-slot>
    <div class="card shadow mb-2">
        <div class="card-body">
            <div class="row mb-2">
                <small>* Campos obrigatórios</small>
            </div>
            <form action="{{ route('configurations.store') }}" method="post" class="row g-3">
                @csrf
                @foreach ($configurations as $configuration)
                    <div class="col-md-4">
                        <label for="{{ $configuration->name }}" class="form-label">{{ $configuration->label }} *</label>
                        <input type="text"
                            name="{{ $configuration->name }}"
                            value="{{ $configuration->value ?? @old($configuration->name) }}"
                            class="form-control"
                            required
                            autofocus>
                        @error($configuration->name)
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                @endforeach
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
