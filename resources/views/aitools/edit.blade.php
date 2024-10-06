@extends("layout")
@section("content")
<h1>Eszköz szerkesztése</h1>

@if ($errors->any())
    <div class="alert alert-warnin">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('aitools.update')}}" method="post">
    @csrf
    @method('PUT')
    <fieldset>
        <label for="name">AI eszköz név</label>
        <input type="text" name="name" id="name" value="{{old('name', $aitool->name)}}">
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
        <textarea type="text" name="description" id="description">{{old('description', $aitool->description)}}</textarea>
    </fieldset>
    <fieldset>
        <label for="link">AI eszköz linkje</label>
        <input type="text" name="link" id="link" value="{{old('link', $aitool->link)}}">
    </fieldset>
    <fieldset>
        <label for="hasFreePlan">Van ingyenes változata</label>
        <input type="checkbox" name="hasFreePlan" id="hasFreePlan">
    </fieldset>
    <fieldset>
        <label for="price">Ár</label>
        <input type="number" name="price" id="price" value="{{old('price', $aitool->price)}}">
    </fieldset>
    <button type="submit">Mentés</button>
</form>
@endsection
