@extends('layouts.index')

@section('content')
    <div class="container">
        @foreach ($messages as $message)
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$message->id}}">
                {{$message->name}}
            </button>

                <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$message->id}}" tabindex="-1" aria-labelledby="{{$message->email}}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="{{$message->email}}">{{$message->email}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           {{$message->message}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection