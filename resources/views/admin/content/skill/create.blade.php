@extends('layouts.admin.paneladmin',['title' => 'Modifier une competences'])

@section('content')
    <form action="{{route('skill.update',['skill' => $skill->id]) }}" method="post">
    @method('PATCH')
    @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">techno</label>
            <input value="{{$skill->techno}}" name="techno" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">color</label>
            <input value="{{$skill->color}}" name="color" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">pourcentage</label>
            <input value="{{$skill->pourcentage}}" name="pourcentage" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">animate</label>
            <input value="{{$skill->animate}}" name="animate" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="appliquez la modification">
        </div>
    </form>
    <br>
    <form action="{{route('skill.destroy',['skill' => $skill->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger mt-5" value="supprimer la publication">
    </form>
@endsection