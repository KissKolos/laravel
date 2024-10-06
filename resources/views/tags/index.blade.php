@extends("layout")

@section("content")
<h1>Címkék</h1>

@if(session("success"))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<ul>
    @foreach($tags as $tag)
        <li class="actions">
            {{$tag->name}}
            <a href="{{route('tags.edit', $tag->id)}}" class="button">Szerkesztés</a>
            <a href="{{route('tags.show', $tag->id)}}" class="button">Megjelenítés</a>
            <form action="{{route('tags.destroy', $tag->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submint" onclick="return confirm('Biztos törölni szeretné')">Törlés</button>
            </form>
        </li>
    
    @endforeach
</ul>

@endsection
