<x-app-layout>
    <x-slot name="title">Bem-vindo, {{ Auth::user()->name }}!</x-slot>
    <div class="card shadow">
        <div class="card-body">
        </div>
    </div>
</x-app-layout>
