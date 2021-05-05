<x-base-layout>
    <x-navbar />
    <div class="container-fluid mt-4">
        <div class="row">
            <nav class="col-md-3 col-xl-2 mb-2">
                <x-sidebar />
            </nav>
            <main class="col-md-9 col-xl-10">
                <div class="row mb-2">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-header d-flex align-items-center justify-content-between gap-2 border-0">
                                <h2 class="card-title">{{ $title }}</h5>
                                {{ $cardHeader ?? '' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-base-layout>
