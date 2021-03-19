@extends('base')

@section('content')
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
        <th scope="col">image</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($beers as $beer)
        <tr>
            <th scope="row">{{$beer->id}}</th>
            <td><a href="{{route('beers.show', compact('beer')) }}">{{$beer->brand}}</a></td>
            <td>{{$beer->name}}</td>
            <td>{{$beer->type}}</td>
            <td>{{$beer->taste}}</td>
            <td>{{$beer->color}}</td>
            <td>{{$beer->alcohol}}</td>
            <td><img src="{{$beer->image}}" style="width:80%" alt=""></td>
        </tr>
      @endforeach

    </tbody>
  </table>
  @endsection


