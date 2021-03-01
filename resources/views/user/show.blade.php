<x-app-layout>
    <x-slot name="header">
        <h1>Usuário [{{ $user['name'] }}]</h1>
    </x-slot>
    <p>ID: {{ $user['id']}}</p>
    <p>Nome: {{ $user['name'] }}</p>
</x-app-layout>
