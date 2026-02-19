<x-layout>
    <x-slot:title>
    {{$diary->title}}
    </x-slot:title>
    <h1>{{$diary->title}}</h1>
    <p>{{ $diary->body}}</p>
    <a href="/diaries/{{$diary->id}}/edit">Edit</a>
    <form action="{{$diary->id}}" method="POST">
        @csrf
        @method ("delete")
        <button>Delete</button>
    </form>
</x-layout>