@extends('layout')

@section('content')

    <h1>AI eszközök</h1>

    @if(session("success"))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif

    @foreach($aitools as $aitool)
        <li class="actions">
            {{$aitool->name}}
            <a href="{{route('aitools.edit', $aitool->id)}}" class="button">Szerkesztés</a>
            <a href="{{route('aitools.show', $aitool->id)}}" class="button">Megjelenítés</a>
            <form action="{{route('aitools.destroy', $aitool->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submint" onclick="return confirm('Biztos törölni szeretné')">Törlés</button>
            </form>
        </li>
    @endforeach
@endsection
