<x-app-layout>
    <x-slot name="title">Editar atividade</x-slot>
    <form action="{{ route('activities.update', $activity) }}" method="post" class="row g-3">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $activity->name }}" required autocomplete="name" autofocus>
            @error('name')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="description" class="form-label">Descrição</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required rows="2">{{ old('description') ?? $activity->description }}</textarea>
            @error('description')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="type" class="form-label">Tipo Atividade</label>
            <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') ?? $activity->type }}" autocomplete="type">
            @error('type')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="start_date" class="form-label">Data Hora Inicial</label>
            <input id="start_date" type="datetime-local" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') ?? date('Y-m-d\TH:i', strtotime($activity->start_date)) }}" autocomplete="start_date">
            @error('start_date')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="end_date" class="form-label">Data Hora Final</label>
            <input id="end_date" type="datetime-local" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date') ?? date('Y-m-d\TH:i', strtotime($activity->end_date)) }}" autocomplete="end_date">
            @error('end_date')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="place" class="form-label">Local</label>
            <input id="place" type="text" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ old('place') ?? $activity->place}}" autocomplete="place">
            @error('place')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="vacancies" class="form-label">Vagas</label>
            <input id="vacancies" type="number" class="form-control @error('vacancies') is-invalid @enderror" name="vacancies" value="{{ old('vacancies') ?? $activity->vacancies }}" autocomplete="vacancies">
            @error('vacancies')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="responsible" class="form-label">Responsável</label>
            <input id="responsible" type="text" class="form-control @error('responsible') is-invalid @enderror" name="responsible" value="{{ old('responsible') ?? $activity->responsible }}" autocomplete="responsible">
            @error('responsible')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="instructions" class="form-label">Instruções</label>
            <input id="instructions" type="text" class="form-control @error('instructions') is-invalid @enderror" name="instructions" value="{{ old('instructions') ?? $activity->instructions }}" autocomplete="instructions">
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

</x-app-layout>
