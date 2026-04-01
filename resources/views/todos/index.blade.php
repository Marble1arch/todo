<x-layout>
<h1>Visi veicamie uzdevumi</h1>
    <ul>
    
  @foreach ($user as $use)
    <li><a href="/todos/{{$use->id}}">{{ $use->content }}</a></li>
  @endforeach

</ul>
</x-layout>