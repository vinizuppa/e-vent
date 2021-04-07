<x-guest-layout>
    <div class="container">
        <div class="card shadow bg-dark rounded-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="http://centralbme.com.br/blog/wp-content/uploads/Como-um-evento-corporativo-pode-ajudar-a-sua-empresa.jpg" alt="Banner do evento" class="w-100 h-100 img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title mx-2 text-white">Informações do Evento</h2>
                        <h4 class="card-text my-3 text-white"><i class="mx-2 bi bi-bookmark-star text-danger"></i>{{ $event->name }}</h4>
                        <h4 class="card-text my-3 text-white"><i class="mx-2 bi bi-file-earmark-text text-danger"></i>{{ $event->description }}</h4>
                        <h4 class="card-text my-3 text-white"><i class="mx-2 bi bi-geo-alt text-danger"></i>{{ $event->address }}</h4>
                        <h4 class="card-text my-3 text-white"><i class="mx-2 bi bi-telephone text-danger"></i>{{ $event->phone }}</h4>
                        <h4 class="card-text my-3 text-white"><i class="mx-2 bi bi-calendar2-check text-danger"></i>{{ $event->startDate() }}</h4>
                        <h4 class="card-text my-3 text-white"><i class="mx-2 bi bi-calendar2-x text-danger"></i>{{ $event->endDate() }}</h4>
                        <h4 class="card-text my-3 text-white"><i class="mx-2 bi bi-cash-stack text-danger"></i>{{ $event->registration_fee }}</h4>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-danger">Inscreva-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive mx-auto mt-3 rounded-3">
            <table class="table table-dark table-striped">
                <thead>
                    <th scope="col">Nome</th>
                    <th scope="col">Instruções</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Vagas disponíveis</th>
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