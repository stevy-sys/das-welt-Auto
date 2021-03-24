@extends('layouts.admin.paneladmin',['title' => 'Toutes les competences'])

@section('content')
    <div>
        <button class="btn btn-warning"> <a href="{{ route('skill.create')}}">Ajouter une competence</a></button>
    </div>
    <br><br>
    <table class="table text-center">
        <thead class="">
            <tr>
                <td>id</td>
                <td>techno</td>
                <td>color</td>
                <td>pourcentage</td>
                <td>animate</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($skill as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->techno}}</td>
                    <td class="col-lg-1">{{$item->color}}</td>
                    <td class="col-lg-2">{{$item->pourcentage}}</td>
                    <td>{{$item->animate}}</td>
                    <td class="col-lg-4">
                        <button class="btn btn-success"><a href="{{ route('skill.create',['id' => $item->id]) }}">modifier</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection