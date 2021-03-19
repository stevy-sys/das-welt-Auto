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


                    <!-- Room Review -->
                    <div class="room-review-area mb-100">
                        <h4>Room Review</h4>
                        @auth
                            <form method="post" action="{{ route('commentaire.store',['voiture_id' => $voiture->id]) }}" class="mb-5">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Votre commentaire</label>
                                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button class="btn btn-success" type="submit">Commentaire</button>
                            </form>
                        @else
                            <h3>Connecter vous pour commentez</h3>
                            <a class="btn btn-primary" href="{{route('login')}}">Connexion</a>
                            <br><br>
                        @endauth
                        <!-- Single Review Area -->
                        @foreach ($voiture->commentaire as $commentaire)
                            <div class="single-room-review-area d-flex align-items-center">
                                <div class="reviwer-thumbnail">
                                    <img src="{{asset('img/bg-img/53.jpg')}}" alt="">
                                </div>
                                <div class="reviwer-content">
                                    <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                        <div class="reviwer-title">
                                            <span>{{ $commentaire->created_at->format('d/m/Y H:i') }}</span>
                                            <h6>{{$commentaire->user->name}}</h6>
                                        </div>
                                        <div class="reviwer-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>{{$commentaire->content}}</p>
                                </div>
                            </div>
                        @endforeach
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
                                <a href="{{ route('contact') }}" class="btn btn-primary">contactez-nous <i class="fa fa-phone" aria-hidden="true"></i></a>
                                <br><br>
                                <form method="post" action="{{ route('voiture.store',['id' => $voiture->id]) }}">
                                    @csrf
                                    <button type="submit"  class="btn btn-danger">ajouter au favoris <i class="fa fa-list" aria-hidden="true"></i></button>
                                </form>
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
                    
                    <div class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia laboriosam consectetur cumque aliquam vitae recusandae dignissimos quae dolorem ullam ex velit atque a, debitis, voluptas impedit iure eos adipisci necessitatibus rem maxime? Ipsum sequi, dicta dolorem doloribus saepe quia sunt qui ducimus cupiditate deserunt? Ipsa, recusandae. Perferendis excepturi quae iste iusto, officia maxime at vitae totam beatae tempora sapiente voluptate animi, iure ipsam deleniti molestias, odio culpa praesentium alias repellat! Quidem neque maxime eligendi dolore dignissimos. Vel a rem quae esse ullam nihil qui delectus. Nostrum amet facilis nesciunt qui blanditiis fugit dignissimos labore. Corrupti eos ad illo aut quos, placeat suscipit sunt voluptatum pariatur voluptatem nostrum dicta molestiae temporibus totam in ab iusto aspernatur quam fugiat praesentium omnis asperiores reprehenderit laudantium delectus? Facere nobis corporis eaque tempore, excepturi iure possimus at deleniti esse rem. Sed officia velit voluptate temporibus neque nulla et excepturi animi nam accusantium beatae consectetur ad consequatur esse dolore sit repudiandae eaque incidunt nemo alias facilis officiis, aperiam ullam blanditiis! Voluptates necessitatibus voluptate quas excepturi cumque temporibus voluptatum quidem. Similique numquam illo facere sint cupiditate, unde modi. Dolorem itaque quidem autem in minima doloremque exercitationem sed? Asperiores sequi, assumenda sunt molestiae libero quibusdam corporis sed!</div> 
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
@endsection