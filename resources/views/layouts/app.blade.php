<x-base-layout>
    <x-navbar />
    <div class="container-fluid mt-3">
        <div class="row">
            <nav class="col-md-3 col-xl-2 mb-3">
                <x-sidebar />
            </nav>
            <main class="col-md-9 col-xl-10">
                <div class="card shadow">
                    @if($title)
                        <div class="card-header">
                            <h1>{{ $title ?? ''}}</h1>
                        </div>
                    @endif
                    <div class="card-body">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-base-layout>
