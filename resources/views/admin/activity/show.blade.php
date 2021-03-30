<x-app-layout>
    <x-slot name="title">Informações da Atividade</x-slot>
    <p>ID: {{ $activity->id }}</p>
    <p>Nome: {{ $activity->name }}</p>
    <p>Descrição: {{ $activity->description }}</p>
    <p>Tipo Atividade: {{ $activity->type }}</p>
    <p>Local: {{ $activity->place }}</p>
    <p>Vagas: {{ $activity->vacancies }}</p>
    <p>Instruções: {{ $activity->instructions }}</p>
    <p>Responsável: {{ $activity->responsible }}</p>
    <p>Início: {{ $activity->startDate() }}</p>
    <p>Fim: {{ $activity->endDate() }}</p>
</x-app-layout>
