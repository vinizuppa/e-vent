<x-app-layout>
    <x-slot name="title">Nova atividade</x-slot>
    <div class="card shadow mb-2">
        <div class="card-body">
            <div class="row mb-2">
                <small>* Campos obrigatórios</small>
            </div>
            <form action="{{ route('events.activities.store', $event) }}" method="post" class="row g-3">
                @csrf
                <div class="col-md-4">
                    <label for="name" class="form-label">Nome *</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-8">
                    <label for="description" class="form-label">Descrição *</label>
                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="2" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="type" class="form-label">Tipo Atividade *</label>
                    <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required>
                    @error('type')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="vacancies" class="form-label">Vagas</label>
                    <input id="vacancies" type="number" class="form-control @error('vacancies') is-invalid @enderror" name="vacancies" value="{{ old('vacancies') ?? '0' }}">
                    @error('vacancies')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="responsible" class="form-label">Responsável *</label>
                    <input id="responsible" type="text" class="form-control @error('responsible') is-invalid @enderror" name="responsible" value="{{ old('responsible') }}" required>
                    @error('responsible')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="place" class="form-label">Local *</label>
                    <input id="place" type="text" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ old('place') }}" required>
                    @error('place')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="start_date" class="form-label">Data/hora inicial *</label>
                    <input id="start_date" type="datetime-local" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}" required>
                    @error('start_date')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="end_date" class="form-label">Data/hora final *</label>
                    <input id="end_date" type="datetime-local" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date') }}" required>
                    @error('end_date')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="instructions" class="form-label">Instruções</label>
                    <textarea id="instructions" class="form-control @error('instructions') is-invalid @enderror" name="instructions" rows="2">{{ old('instructions') }}</textarea>
                    @error('instructions')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
