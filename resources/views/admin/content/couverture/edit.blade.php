@extends('layouts.index')

@section('content')
    <div class="container">
        <form  action="{{route('couverture.update',['couverture' => $couverture->id]) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
            <div class="mb-3">
                <img width="400px" src="{{asset('storage').'/'.$couverture->image}}" alt="" >
            </div>
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
                <input value="{{$couverture->description}}" name="description" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">titre</label>
                <input value="{{$couverture->titre}}" name="titre" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">redirection</label>
                <input value="{{$couverture->redirection}}" name="redirection" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-file">
                <input type="file" name="image" class="form-file-input" id="customFile">

            </div>
            <br><br><br>
            <div>
                <input type="submit" class="btn btn-primary mt-5" value="appliquez la modification">
            </div>
        </form>
        <br>
        <form action="{{route('couverture.destroy',['couverture' => $couverture->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger mt-5" value="supprimer l'couverture">
        </form>
    </div>
@endsection