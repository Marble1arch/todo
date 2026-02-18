<x-layout>
<x-slot:title>
    Izveidot dienasgrāmatu
    </x-slot:title>
    <h1>Izveidot dienasgrāmatu</h1>
    <form method="POST" action="/diaries">
    @csrf
        <input name="title" />
        <input name="body" />
        @error("title")
    <p>{{ $message }}</p>
        @enderror
        @error("body")
    <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</x-layout>