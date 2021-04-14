<x-guest-layout>
    <div class="w-100 position-absolute ms-0" style="z-index: 1; top: -300px;">
        <img src="https://blog.vulpi.com.br/wp-content/uploads/2018/03/eventos-corporativos.jpg" alt="Banner do evento" class="w-100" style="filter: blur(13px);">
    </div>
    <div class="container d-flex justify-content-center flex-wrap position-relative" style="z-index: 10;">
        <div class="justify-content-center shadow w-100">
            <img src="https://blog.vulpi.com.br/wp-content/uploads/2018/03/eventos-corporativos.jpg" alt="Banner do evento" class="w-100 img-fluid rounded">
        </div>
        <div class="card shadow rounded-3 border border-danger w-75" style="top: -15px;">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        <h3 class="card-title mx-2 text-dark">Informações do Evento</h3>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-bookmark-star text-danger"></i>{{ $event->name }}</h5>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-file-earmark-text text-danger"></i>{{ $event->description }}</h5>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-geo-alt text-danger"></i>{{ $event->address }}</h5>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-telephone text-danger"></i>{{ $event->phone }}</h5>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-calendar2-check text-danger"></i>{{ $event->startDate() }}</h5>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-calendar2-x text-danger"></i>{{ $event->endDate() }}</h5>
                        <h5 class="card-text my-3 text-dark"><i class="mx-2 bi bi-cash-stack text-danger"></i>{{ $event->registration_fee }}</h5>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('public.events.subscribe', $event->id) }}" class="btn btn-danger">Inscreva-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive mx-auto mt-3 rounded-3">
            <table class="table table-blue table-striped">
                <thead>
                    <th scope="col"><h5 class="text-danger">Nome</h5></th>
                    <th scope="col"><h5 class="text-danger">Instruções</h5></th>
                    <th scope="col"><h5 class="text-danger">Tipo</h5></th>
                    <th scope="col"><h5 class="text-danger">Vagas disponíveis</h5></th>
                </thead>
                <tbody>
                    @forelse ($event->activities as $activity)
                        <tr>
                            <td>{{ $activity->name }}</td>
                            <td>{{ $activity->instructions }}</td>
                            <td>{{ $activity->type }}</td>
                            <td>{{ $activity->vacancies }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Sem dados</td>
                        <tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>    
</x-guest-layout>