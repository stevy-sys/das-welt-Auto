@extends('layouts.admin.paneladmin',['title' => 'Modifer une service'])

@section('content')
    <form action="{{route('service.update',['service' => $service->id]) }}" method="post">
    @method('PATCH')
    @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">color</label>
            <input value="{{$service->color}}" name="color" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">icon</label>
            <input value="{{$service->icon}}" name="icon" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">titre</label>
            <input value="{{$service->title}}" name="title" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">content</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$service->content}}</textarea>
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="appliquez la modification">
        </div>
    </form>
    <br>
    <form action="{{route('service.destroy',['service' => $service->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger mt-5" value="supprimer la publication">
    </form>
@endsection