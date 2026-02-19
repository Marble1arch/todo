<x-layout>
    <x-slot:title>
    {{$todo->content}}
    </x-slot:title>
    <h1>{{$todo->content}}</h1>
   <a href="/todos/{{$todo->id}}/edit">Edit</a>
        <form action="{{$todo->id}}" method="POST">
        @csrf
        @method ("delete")
        <button>Delete</button>
    </form>
</x-layout>