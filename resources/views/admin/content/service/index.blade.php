@extends('layouts.admin.paneladmin',['title' => 'Toutes les services'])

@section('content')
    <div>
        <button class="btn btn-warning"> <a href="{{ route('service.create')}}">Ajouter une service</a></button>
    </div>
    <br><br>
    <table class="table text-center">
        <thead class="">
            <tr>
                <td>id</td>
                <td>color</td>
                <td>icon</td>
                <td>title</td>
                <td>content</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($service as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td class="col-lg-1">{{$item->color}}</td>
                    <td class="col-lg-2">{{$item->icon}}</td>
                    <td class="col-lg-2">{{$item->title}}</td>
                    <td class="col-lg-6">{{$item->content}}</td>
                    <td class="col-lg-1">
                        <button class="btn btn-success"><a href="{{ route('service.create',['id' => $item->id]) }}">modifier</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection