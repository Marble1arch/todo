<x-layout>
<x-slot:title>
    Rediģēt dienasgrāmatu
    </x-slot:title>
    <h1>Rediģēt dienasgrāmatu</h1>
    <form method="POST" action="/diaries/{{$diary->id}}">
    @csrf
    @method('PUT')
       <label>
        <input name= "title" value= "{{old('title',$diary->title) }}" />
       </label></br>
        @error("title")
            <p>{{ $message }}</p>
        @enderror
        <label>
        <textarea name= "body" >{{old('body',$diary->body) }}</textarea>
       </label>
       @error("body")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</x-layout>