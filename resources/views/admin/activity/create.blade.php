<x-app-layout>
    <x-slot name="title">Nova atividade</x-slot>
    <div class="card shadow mb-2">
        <div class="card-body">
            <div class="row mb-2">
                <small>* Campos obrigatórios</small>
            </div>
            <form action="{{ route('events.activities.store', $event) }}" method="post" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="event" class="form-label">Evento</label>
                    <input
                        type="text"
                        value="{{ $event->name }}"
                        class="form-control disabled">
                </div>
                <div class="col-md-6">
                    <label for="dates" class="form-label">Período</label>
                    <input
                        type="text"
                        value="{{ $event->start_date->isoFormat('L HH:mm') }} - {{ $event->end_date->isoFormat('L HH:mm') }}"
                        class="form-control disabled">
                </div>
                <div class="col-md-4">
                    <label for="name" class="form-label">Nome *</label>
                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror"
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
                        name="description"
                        class="form-control @error('description') is-invalid @enderror"
                        rows="2"
                        required>
                        {{ old('description') }}
                    </textarea>
                    @error('description')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="type" class="form-label">Tipo *</label>
                    <select name="type" class="form-select" required>                        
                        <option value="" selected>Selecione uma opção</option>
                        <option value="Curso">Curso</option>
                        <option value="Palestra">Palestra</option>
                        <option value="Seminário">Seminário</option>                                                                                                
                    </select>                    
                    @error('type')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="vacancies" class="form-label">Vagas</label>
                    <input
                        type="number"
                        class="form-control @error('vacancies') is-invalid @enderror"
                        name="vacancies"
                        min="0"
                        value="{{ old('vacancies') ?? '0' }}">
                    @error('vacancies')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="responsible" class="form-label">Responsável *</label>
                    <input
                        type="text"
                        class="form-control @error('responsible') is-invalid @enderror"
                        name="responsible"
                        value="{{ old('responsible') }}"
                        required>
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
                        value="{{ old('place') }}"
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
                        name="start_date"
                        class="form-control @error('start_date') is-invalid @enderror"
                        value="{{ old('start_date') }}"
                        min="{{ date('Y-m-d\TH:i:s', strtotime($event->start_date)) }}"
                        max="{{ date('Y-m-d\TH:i:s', strtotime($event->end_date)) }}"
                        step="any"
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
                        name="end_date"
                        class="form-control @error('end_date') is-invalid @enderror"
                        value="{{ old('end_date') }}"
                        min="{{ date('Y-m-d\TH:i:s', strtotime($event->start_date)) }}"
                        max="{{ date('Y-m-d\TH:i:s', strtotime($event->end_date)) }}"
                        step="any"
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
                        rows="2">
                        {{ old('instructions') }}
                    </textarea>
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
