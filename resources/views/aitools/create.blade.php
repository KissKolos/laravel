@extends("layout")
@section("content")
<h1>Új AI eszköz</h1>

@if ($errors->any())
    <div class="alert alert-warnin">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('aitools.store')}}" method="post">
    @csrf
    <fieldset>
        <label for="name">AI eszköz név</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <fieldset>
        <label for="category_id">Kategória</label>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </fieldset>
    <fieldset>
        <label for="description">AI eszköz leírása</label>
        <textarea type="text" name="description" id="description"></textarea>
    </fieldset>
    <fieldset>
        <label for="link">AI eszköz linkje</label>
        <input type="text" name="link" id="link">
    </fieldset>
    <fieldset>
        <label for="hasFreePlan">Van ingyenes változata</label>
        <input type="checkbox" name="hasFreePlan" id="hasFreePlan">
    </fieldset>
    <fieldset>
        <label for="price">Ár</label>
        <input type="number" name="price" id="price">
    </fieldset>
    <fieldset>
        <label for="tags">Címkék</label>
        <select name="tags[]" id="tags" multiple>
            @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
    </fieldset>
    <button type="submit">Mentés</button>
</form>
@endsection
