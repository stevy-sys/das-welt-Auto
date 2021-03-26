@extends('layouts.index')

@section('content')
    <div class="container">
        <div>
            <button class="btn btn-warning"> <a href="{{ route('couverture.create')}}">Ajouter une couverture</a></button>
        </div>
        <br><br>
        <table class="table text-center">
            <thead class="">
                <tr>
                    <td>id</td>
                    <td>image</td>
                    <td>animation</td>
                    <td>description</td>
                    <td>titre</td>
                    <td>redirection</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($couvertures as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->image}}</td>
                        <td class="col-lg-1">{{$item->animation}}</td>
                        <td class="col-lg-2">{{$item->description}}</td>
                        <td class="col-lg-2">{{$item->titre}}</td>
                        <td>{{$item->redirection}}</td>
                        <td class="col-lg-1">
                            <button class="btn btn-success"><a href="{{ route('couverture.edit',['couverture' => $item->id]) }}">modifier</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection