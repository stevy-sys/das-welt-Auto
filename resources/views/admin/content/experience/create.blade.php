@extends('layouts.admin.paneladmin',['title' => 'Modifier une experience'])

@section('content')
    <form action="{{route('experience.update',['experience' => $experience->id]) }}" method="post">
    @method('PATCH')
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">animate</label>
            <input value="{{$experience->animate}}" name="animate" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">color</label>
            <input value="{{$experience->color}}" name="color" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">title</label>
            <input value="{{$experience->title}}" name="title" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">date</label>
            <input value="{{$experience->date}}" name="date" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">content</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$experience->content}}</textarea>
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="appliquez la modification">
        </div>
    </form>
    <br>
    <form action="{{route('experience.destroy',['experience' => $experience->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger mt-5" value="supprimer l'experience">
    </form>
@endsection