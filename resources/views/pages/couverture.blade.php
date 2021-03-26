@extends('layouts.index')

@section('content')
    
    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            @foreach ($couvertures as $couverture)
                 <!-- Single Welcome Slide -->
                    <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('storage').'/'.$couverture->image}});" data-img-url='{{asset('storage').'/'.$couverture->image}}'>
                        <!-- Welcome Content -->
                        <div class="welcome-content h-100">
                            <div class="container h-100">
                                <div class="row h-100 align-items-center">
                                    <!-- Welcome Text -->
                                    <div class="col-12">
                                        <div class="welcome-text text-center">
                                            <h6 data-animation="{{$couverture->animation}}" data-delay="200ms">{{$couverture->description}}</h6>
                                            <h2 data-animation="{{$couverture->animation}}" data-delay="500ms">{{$couverture->titre}}</h2>
                                            <a href="{{$couverture->redirection}}" class="btn roberto-btn btn-2" data-animation="{{$couverture->animation}}" data-delay="800ms">{{$couverture->redirection}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </section>
    <!-- Welcome Area End -->
@endsection