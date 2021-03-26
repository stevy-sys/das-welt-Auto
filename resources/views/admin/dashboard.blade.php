@extends('layouts.index')

@section('content')
    <div class="container">
        <h1 class="text-center">TABLEAU DE BORD ESPCE ADMIN</h1>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Messages</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('message.index') }}" class="btn btn-primary">Mes Messages</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toutes les voitures</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('voiture.index') }}" class="btn btn-primary">Mes Favoris</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Reglages page</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('commentaire.index') }}" class="btn btn-primary">Mes commentaires</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Reglages couverture</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('couverture.index') }}" class="btn btn-primary">Mes commentaires</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection