<x-app-layout>
    <x-slot name="title">Informações do Evento</x-slot>
    <p>ID: {{ $event->id }}</p>
    <p>Nome: {{ $event->name }}</p>
    <p>Descrição: {{ $event->description }}</p>
    <p>Endereço: {{ $event->address }}</p>
    <p>Telefone: {{ $event->phone }}</p>
    <p>Valor: {{ $event->registration_fee }}</p>
    <p>Início: {{ $event->start_date }}</p>
    <p>Fim: {{ $event->end_date }}</p>
</x-app-layout>
