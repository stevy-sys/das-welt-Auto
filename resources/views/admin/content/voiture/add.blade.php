@extends('layouts.index')

@section('content')
    <form class="container" action="{{route('voiture.store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">nom</label>
                <select class="form-control" name="categorie_id" id="">
                    @foreach (AllCategorie() as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>    
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">nom</label>
                <input @error('nom') is-invalid @enderror name="nom" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                @error('nom')
                    <div class="invalid-feedback">
                        {{ $errors->first("nom") }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">type</label>
                <input @error('type') is-invalid @enderror name="type" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                @error('type')
                    <div class="invalid-feedback">
                        {{ $errors->first("type") }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">vitesse</label>
                <input @error('vitesse') is-invalid @enderror name="vitesse" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                @error('vitesse')
                    <div class="invalid-feedback">
                        {{ $errors->first("vitesse") }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">place</label>
                <input @error('place') is-invalid @enderror name="place" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                @error('place')
                    <div class="invalid-feedback">
                        {{ $errors->first("place") }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">annee</label>
                <input @error('annee') is-invalid @enderror name="annee" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                @error('annee')
                    <div class="invalid-feedback">
                        {{ $errors->first("annee") }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">moteur</label>
                <input @error('moteur') is-invalid @enderror name="moteur" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                @error('moteur')
                    <div class="invalid-feedback">
                        {{ $errors->first("moteur") }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">description</label>
                <textarea @error('description') is-invalid @enderror name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $errors->first("description") }}
                    </div>
                @enderror
            </div>
        
            <div class="form-file">
                <input @error('image') is-invalid @enderror type="file" name="image" class="form-file-input" id="customFile">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $errors->first("image") }}
                    </div>
                @enderror
            </div>
            <h1>AUTRE IMAGE</h1>
            <div class="form-file">
                <input @error('image') is-invalid @enderror  type="file" name="image0" class="form-file-input" id="customFile">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $errors->first("image") }}
                    </div>
                @enderror
            </div>
            <div class="form-file">
                <input @error('image1') is-invalid @enderror  type="file" name="image1" class="form-file-input" id="customFile">
                @error('image1')
                    <div class="invalid-feedback">
                        {{ $errors->first("image1") }}
                    </div>
                @enderror
            </div>
            <div class="form-file">
                <input @error('image2') is-invalid @enderror  type="file" name="image2" class="form-file-input" id="customFile">
                @error('image2')
                    <div class="invalid-feedback">
                        {{ $errors->first("image2") }}
                    </div>
                @enderror
            </div>
            <div class="form-file">
                <input @error('image3') is-invalid @enderror  type="file" name="image3" class="form-file-input" id="customFile">
                @error('image3')
                    <div class="invalid-feedback">
                        {{ $errors->first("image3") }}
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