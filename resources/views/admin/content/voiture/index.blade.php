@extends('layouts.index')

@section('content')
    <div class="container">
        <h1></h1>
        <div>
            <button class="btn btn-warning"> <a href="{{ route('voiture.create') }}">Ajouter une voiture</a></button>
        </div>
        <br><br>
        <table class="table text-center">
            <thead class="">
                <tr>
                    <td>id</td>
                    <td>nom</td>
                    <td>type</td>
                    <td>vitesse</td>
                    <td>place</td>
                    <td>image</td>
                    <td>annee</td>
                    <td>moteur</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($voitures as $voiture)
                    <tr>
                        <th scope="row">{{$voiture->id}}</th>
                        <td class="col-lg-1">{{$voiture->nom}}</td>
                        <td class="col-lg-1">{{$voiture->type}}</td>
                        <td class="col-lg-2">{{$voiture->vitesse}}</td>
                        <td class="col-lg-1">{{$voiture->place}}</td>
                        <td class="col-lg-1"><img src="{{ asset('sorage').'/'.$voiture->image}}" width="200px" alt=""></td>
                        <td class="col-lg-3">{{$voiture->annee}}</td>
                        <td class="col-lg-1">{{$voiture->moteur}}</td>
                        <td class="col-lg-1">
                            <button class="btn btn-success"><a href="{{ route('voiture.edit',['voiture' => $voiture->id]) }}">modifier</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection