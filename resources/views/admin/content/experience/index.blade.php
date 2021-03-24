@extends('layouts.admin.paneladmin',['title' => 'Toute les experiences'])

@section('content')
    <div>
        <button class="btn btn-warning"> <a href="{{ route('experience.create')}}">Ajouter une experience</a></button>
    </div>
    <br><br>
    <table class="table text-center">
        <thead class="">
            <tr>
                <td>id</td>
                <td>animate</td>
                <td>color</td>
                <td>title</td>
                <td>date</td>
                <td>content</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($experience as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->animate}}</td>
                    <td class="col-lg-1">{{$item->color}}</td>
                    <td class="col-lg-2">{{$item->title}}</td>
                    <td class="col-lg-2">{{$item->date}}</td>
                    <td>{{$item->content}}</td>
                    <td class="col-lg-1">
                        <button class="btn btn-success"><a href="{{ route('experience.create',['id' => $item->id]) }}">modifier</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection