<x-app-layout>
    <x-slot name="title">Bem-vindo, {{ $user->name }}!</x-slot>
    <div class="card shadow mb-2">
        @if($pixConfig)
            <div class="row m-2">
                <div class="col-12">
                    <div class="alert alert-danger">
                        Pix não configurado! 
                        Configure <a href="{{ route('configurations.create') }}" class="alert-link">aqui</a> para receber via Pix.
                    </div>
                </div>
            </div>
        @endif
        <div class="row m-2 g-2">            
            <div class="col-12">
                <div class="card p-2">
                    <div id="usuarios"></div> 
                </div>
            </div>
            <div class="col-6">
                <div class="card p-2">
                    <div id="inscricoes_payment"></div> 
                </div>
            </div>
            <div class="col-6">
                <div class="card p-2">
                    <div id="inscricoes_status"></div> 
                </div>
            </div>            
        </div>
        <div class="row row-cols-2 row-cols-md-3 m-2 g-2">    
            <div class="col">
                <a href="{{ route('events.index') }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>{{ $events == 0 ? 'Nenhum' : $events }} evento{{ $events > 1 ? 's' : '' }}</h5>
                    <i class="fas fa-calendar-alt fa-5x"></i>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.activities') }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>{{ $activities == 0 ? 'Nenhuma' : $activities }} atividade{{ $activities > 1 ? 's' : '' }}</h5>
                    <i class="fas fa-file-signature fa-5x"></i>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.subscriptions') }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>{{ $subscriptions == 0 ? 'Nenhuma' : $subscriptions }} inscriç{{ $subscriptions > 1 ? 'ões' : 'ão' }}</h5>
                    <i class="fas fa-list fa-5x"></i>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('users.index') }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>Todos os usuários</h5>
                    <i class="fas fa-users fa-5x"></i>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('users.index', ['group' => 'organizer']) }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>{{ $organizers == 0 ? 'Nenhum' : $organizers }} organizador{{ $organizers > 1 ? 's' : '' }}</h5>
                    <i class="fas fa-user-tie fa-5x"></i>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('users.index', ['group' => 'participant']) }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>{{ $participants == 0 ? 'Nenhum' : $participants }} participante{{ $participants > 1 ? 's' : '' }}</h5>
                    <i class="fas fa-user fa-5x"></i>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('configurations.index') }}" class="btn btn-outline-danger p-3 w-100">
                    <h5>Configurações</h5>
                    <i class="fas fa-cog fa-5x"></i>
                </a>
            </div>            
        </div>        
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var dataUsuarios = google.visualization.arrayToDataTable([
                ['Tipo de usuário', 'Quantidade'],
                ['Participantes', {{ $participants }}],
                ['Organizadores', {{ $organizers }}]
            ]);                        
            var chartUsuarios = new google.visualization.PieChart(document.getElementById('usuarios'));
            chartUsuarios.draw(dataUsuarios, {title: 'Usuários cadastrados', is3D: true});
            
            var dataInscricoesStatus = new google.visualization.DataTable();
            dataInscricoesStatus.addColumn('string', 'Status');
            dataInscricoesStatus.addColumn('number', 'Inscrições');
            dataInscricoesStatus.addRows(@json($subscriptionsStatus));
            var chartInscricoesStatus = new google.visualization.PieChart(document.getElementById('inscricoes_status'));
            chartInscricoesStatus.draw(dataInscricoesStatus, {title: 'Status inscrições', is3D: true});
            
            var dataInscricoesPayment = new google.visualization.DataTable();
            dataInscricoesPayment.addColumn('string', 'Forma de pagamento');
            dataInscricoesPayment.addColumn('number', 'Inscrições');
            dataInscricoesPayment.addRows(@json($subscriptionsPayment));
            var chartInscricoesPayment = new google.visualization.ColumnChart(document.getElementById('inscricoes_payment'));
            chartInscricoesPayment.draw(dataInscricoesPayment, {title: 'Forma de pagamento inscrições', legend: { position: 'none' }});
        }
    </script>
</x-app-layout>
