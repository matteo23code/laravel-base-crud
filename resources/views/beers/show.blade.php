@extends('base')

@section('content')

<div class="product-container">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$beer->image}}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">{{$beer->name}}</h5>
        <p class="card-text">{{$beer->type}}</p>
        <a href="/beers" class="btn btn-primary">Return</a>
        </div>
    </div>
@endsection


    {{--
        <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">brand</th>
                <th scope="col">name</th>
                <th scope="col">type</th>
                <th scope="col">taste</th>
                <th scope="col">color</th>
                <th scope="col">alcohol</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$beer->id}}</th>
                <td>{{$beer->brand}}</td>
                <td>{{$beer->name}}</td>
                <td>{{$beer->type}}</td>
                <td>{{$beer->taste}}</td>
                <td>{{$beer->color}}</td>
                <td>{{$beer->alcohol}}</td>
                <td><img src="{{$beer->image}}" alt=""></td>
            </tr>


        </tbody>
    </table>
    --}}
