@extends('layouts.index')
@section('content')
    <div class="container">
        <h1 class="text-center">TABLEAU DE BORD ESPACE CLIENT</h1>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Messages</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('message.user') }}" class="btn btn-primary">Mes Messages</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Voiture favoris</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('favoris.user') }}" class="btn btn-primary">Mes Favoris</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Commentaire</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('commentaire.user') }}" class="btn btn-primary">Mes commentaires</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection