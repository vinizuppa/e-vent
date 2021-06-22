<div class="card shadow">
    <div class="card-body">
        <ul class="nav row g-2">
            @if (Auth::user()->group == 'Organizador')
                <li class="nav-item bg-danger rounded">
                    <a class="nav-link text-light" href="{{ route('events.index') }}">
                        <i class="fas fa-calendar-alt"></i>
                        Eventos
                    </a>
                </li>
                <li class="nav-item bg-danger rounded">
                    <a class="nav-link text-light" href="{{ route('admin.activities') }}">
                        <i class="fas fa-file-signature"></i>
                        Atividades
                    </a>
                </li>
                <li class="nav-item bg-danger rounded">
                    <a class="nav-link text-light" href="{{ route('admin.subscriptions') }}">
                        <i class="fas fa-list"></i>
                        Inscrições
                    </a>
                </li>                                
            @else
                <li class="nav-item bg-danger rounded">
                    <a href="{{ route('admin.home') }}" class="nav-link text-light">
                        <i class="fas fa-plus"></i>
                        Inscrições
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>

