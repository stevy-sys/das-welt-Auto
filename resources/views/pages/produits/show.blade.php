@extends('layouts.index')

@section('content')
    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($voiture->photoVoitures as $photos)
                                        <div class="carousel-item {{($photos->id == 1) ? 'active' : ''}}">
                                            <img src="{{asset($photos->photo)}}" class="d-block w-100" alt="">
                                        </div>
                                    @endforeach
                                </div>

                                <ol class="carousel-indicators">
                                    @foreach ($voiture->photoVoitures as $photos)
                                        <li data-target="#room-thumbnail--slide" data-slide-to="{{$photos->id - 1}}" class="{{($photos->id == 1) ? 'active' : ''}}">
                                            <img src="{{asset($photos->photo)}}" class="d-block w-100" alt="">
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>


                        <p>{{$voiture->description}}</p>
                    </div>

                    <!-- Room Service -->
                    {{--<div class="room-service mb-50">
                        <h4>Room Services</h4>

                        <ul>
                            <li><img src="img/core-img/icon1.png" alt=""> Air Conditioning</li>
                            <li><img src="img/core-img/icon2.png" alt=""> Free drinks</li>
                            <li><img src="img/core-img/icon3.png" alt=""> Restaurant quality</li>
                            <li><img src="img/core-img/icon4.png" alt=""> Cable TV</li>
                            <li><img src="img/core-img/icon5.png" alt=""> Unlimited Wifi</li>
                            <li><img src="img/core-img/icon6.png" alt=""> Service 24/24</li>
                        </ul>
                    </div>--}}

                    <!-- Room Review -->
                    <div class="room-review-area mb-100">
                        <h4>Room Review</h4>

                        <!-- Single Review Area -->
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="{{asset('img/bg-img/53.jpg')}}" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>27 Aug 2019</span>
                                        <h6>Brandon Kelley</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                            </div>
                        </div>

                        <!-- Single Review Area -->
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="{{asset('img/bg-img/54.jpg')}}" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>27 Aug 2019</span>
                                        <h6>Sounron Masha</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                            </div>
                        </div>

                        <!-- Single Review Area -->
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="{{asset('img/bg-img/55.jpg')}}" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>27 Aug 2019</span>
                                        <h6>Amada Lyly</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                            </div>
                        </div>

                    </div>
                </div>

                
                
                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                            <div class="room-content">
                            <h2>{{$voiture->nom}}</h2>
                            <h4>{{$voiture->type}} <br> <span>{{$voiture->categorie->name}}</span> </h4>
                            
                            <div class="room-feature">
                                <h6>Vitesse: <span>{{$voiture->vitesse}}Km/H</span></h6>
                                <h6>Place: <span>{{$voiture->place}}</span></h6>
                                <h6>Annee: <span>{{$voiture->annee}}</span></h6>
                                <h6>Moteur: <span>{{$voiture->moteur}}</span></h6>
                            </div>
                                <a href="" class="btn view-detail-btn">contactez-nous  <i class="fa fa-phone" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Room Features -->
                        {{--<div class="room-features-area d-flex flex-wrap mb-50">
                            <h6>Size: <span>350-425sqf</span></h6>
                            <h6>Capacity: <span>Max persion 5</span></h6>
                            <h6>Bed: <span>King beds</span></h6>
                            <h6>Services: <span>Wifi, television ...</span></h6>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
@endsection