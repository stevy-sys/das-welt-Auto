@extends('layouts.admin.paneladmin',['title' => 'Ajouter une service'])

@section('content')
    <form action="{{route('service.store') }}" method="post">
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">color</label>
            <input name="color" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">icon</label>
            <input  name="icon" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">titre</label>
            <input name="title" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">content</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="ajouter le service">
        </div>
    </form>
    <br>
@endsection