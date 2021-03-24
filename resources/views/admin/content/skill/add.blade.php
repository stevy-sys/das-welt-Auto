@extends('layouts.admin.paneladmin',['title' => 'Ajouter une competences'])

@section('content')
    <form action="{{route('skill.store') }}" method="post">
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">techno</label>
            <input name="techno" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">color</label>
            <input  name="color" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">pourcentage</label>
            <input name="pourcentage" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">animate</label>
            <input name="animate" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="ajouter le competence">
        </div>
    </form>
    <br>
@endsection