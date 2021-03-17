<x-app-layout>
    <x-slot name="title">Informações do Usuário</x-slot>
    <p>ID: {{ $user->id }}</p>
    <p>Nome: {{ $user->name }}</p>
    <p>Usuário: {{ $user->username }}</p>
    <p>E-mail: {{ $user->email }}</p>
</x-app-layout>
