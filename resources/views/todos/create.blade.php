<x-layout>
<x-slot:title>
    Izveidot uzdevumu
    </x-slot:title>
    <h1>Izveidot uzdevumu</h1>
    <form method="POST" action="/todos">
    @csrf
        <input name="content" />
        <input name="userid" value="{{$user}}" type="hidden">
        @error("content")
    <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</x-layout>