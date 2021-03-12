<x-app-layout>
    <x-slot name="title">Usuário - {{ $user['name'] }}</x-slot>
    <p>ID: {{ $user['id']}}</p>
    <p>Nome: {{ $user['name'] }}</p>
</x-app-layout>
