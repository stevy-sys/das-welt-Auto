@extends('layouts.index')

@section('content')
    <form class="container" action="{{route('couverture.store') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">animation</label>
            <select class="form-control" name="animation" id="">
                <option value="fadeInLeft">gauche</option>    
                <option value="fadeInTop">haut</option>    
                <option value="fadeInRight">droite</option>    
                <option value="fadeInBottom">bas</option>    
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">description</label>
            <input name="description" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">titre</label>
            <input name="titre" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">redirection</label>
            <input name="redirection" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-file">
            <input @error('image') is-invalid @enderror  type="file" name="image" class="form-file-input" id="customFile">
            @error('image3')
                <div class="invalid-feedback">
                    {{ $errors->first("image") }}
                </div>
            @enderror
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="appliquez la modification">
        </div>
    </form>
    <br>
@endsection