<x-app-layout>
    <x-slot name="title">Editar atividade</x-slot>
    <div class="card shadow mb-2">
        <div class="card-body">
            <div class="row mb-2">
                <small>* Campos obrigatórios</small>
            </div>
            <form action="{{ route('activities.update', $activity) }}" method="post" class="row g-3">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label for="event" class="form-label">Evento</label>
                    <input
                        type="text"
                        value="{{ $activity->event->name }}"
                        class="form-control disabled">
                </div>
                <div class="col-md-6">
                    <label for="dates" class="form-label">Período</label>
                    <input
                        type="text"
                        value="{{ $activity->event->start_date->isoFormat('L HH:mm') }} - {{ $activity->event->end_date->isoFormat('L HH:mm') }}"
                        class="form-control disabled">
                </div>
                <div class="col-md-4">
                    <label for="name" class="form-label">Nome *</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') ?? $activity->name }}"
                        required
                        autofocus>
                    @error('name')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-8">
                    <label for="description" class="form-label">Descrição *</label>
                    <textarea 
                        class="form-control @error('description') is-invalid @enderror" 
                        name="description" 
                        required 
                        rows="2">{{ old('description') ?? $activity->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="type" class="form-label">Tipo *</label>
                    <select name="type" class="form-select" required>
                        <option value="">Selecione uma opção</option>
                        <option value="Curso"{{ $activity->type == 'Curso' ? ' selected' : '' }}>Curso</option>
                        <option value="Palestra"{{ $activity->type == 'Palestra' ? ' selected' : '' }}>Palestra</option>
                        <option value="Seminário"{{ $activity->type == 'Seminário' ? ' selected' : '' }}>Seminário</option>
                    </select>
                    @error('type')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="vacancies" class="form-label">Vagas</label>
                    <input id="vacancies" type="number" class="form-control @error('vacancies') is-invalid @enderror" name="vacancies" value="{{ old('vacancies') ?? $activity->vacancies }}" autocomplete="vacancies">
                    @error('vacancies')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="responsible" class="form-label">Responsável *</label>
                    <input id="responsible" type="text" class="form-control @error('responsible') is-invalid @enderror" name="responsible" value="{{ old('responsible') ?? $activity->responsible }}" autocomplete="responsible">
                    @error('responsible')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="place" class="form-label">Local *</label>
                    <input 
                        type="text" 
                        class="form-control @error('place') is-invalid @enderror" 
                        name="place" 
                        value="{{ old('place') ?? $activity->place}}" 
                        required>
                    @error('place')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="start_date" class="form-label">Data início *</label>
                    <input 
                        type="datetime-local" 
                        class="form-control @error('start_date') is-invalid @enderror" 
                        name="start_date" 
                        value="{{ old('start_date') ?? date('Y-m-d\TH:i', strtotime($activity->start_date)) }}"
                        min="{{ date('Y-m-d\TH:i:s', strtotime($event->start_date)) }}"
                        max="{{ date('Y-m-d\TH:i:s', strtotime($event->end_date)) }}"
                        required>
                    @error('start_date')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="end_date" class="form-label">Data fim *</label>
                    <input 
                        type="datetime-local" 
                        class="form-control @error('end_date') is-invalid @enderror" 
                        name="end_date" 
                        value="{{ old('end_date') ?? date('Y-m-d\TH:i', strtotime($activity->end_date)) }}"
                        min="{{ date('Y-m-d\TH:i:s', strtotime($event->start_date)) }}"
                        max="{{ date('Y-m-d\TH:i:s', strtotime($event->end_date)) }}"
                        required>
                    @error('end_date')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="instructions" class="form-label">Instruções</label>
                    <textarea 
                        class="form-control @error('instructions') is-invalid @enderror" 
                        name="instructions"
                        rows="2">{{ old('instructions') ?? $activity->instructions }}</textarea>
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
