<x-layout>
    <x-slot:title>
    {{$todo->content}}
    </x-slot:title>
    <h1>{{$todo->content}}</h1>
    <button ><a href="/todos/{{$todo->id}}/edit">Edit</a></button>
</x-layout>