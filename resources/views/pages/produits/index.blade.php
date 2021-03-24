@extends('layouts.index')

@section('content')
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">

                    @foreach ($voitures as $voiture)
                        <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Room Thumbnail -->
                            <div class="room-thumbnail">
                                <img src="{{ asset('storage').'/'.$voiture->image }}" alt="">
                            </div>
                            <!-- Room Content -->
                            <div class="room-content">
                                <h2>{{$voiture->nom}}</h2>
                                <h4> {{$voiture->type}} <br> <span> {{$voiture->categorie->name}} </span></h4>
                                <div class="room-feature">
                                    <h6>Vitesse: <span>{{$voiture->vitesse}}Km/h</span></h6>
                                    <h6>Place: <span>{{$voiture->place}}</span></h6>
                                    <h6>Annee: <span>{{$voiture->annee}}</span></h6>
                                    <h6>Moteur: <span>{{$voiture->moteur}}</span></h6>
                                </div>
                                <a href="{{route('produit.show',['produit' => $voiture->id])}}" class="btn btn-info"> voir plus <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    @endforeach
                    {{--dd($voitures->links()->elements)--}}
                    <!-- Pagination -->
                    <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
                        <ul class="pagination">
                            {{$voitures->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection