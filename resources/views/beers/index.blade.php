@extends('base')

@section('content')
  <h1 class="title-beer">Birrificio dei Castelli</h1>

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
            <td>{{$beer->brand}}</td>
            <td>{{$beer->name}}</td>
            <td>{{$beer->type}}</td>
            <td>{{$beer->taste}}</td>
            <td>{{$beer->color}}</td>
            <td>{{$beer->alcohol}}</td>
            <td><img src="{{$beer->image}}" style="width:90%" alt=""></td>
            <td>
              <a href="{{route('beers.show', compact('beer')) }}">
                <i class="fas fa-eye"></i>
              </a>
            </td>
            <td>
              <a href="{{route('beers.edit', compact('beer')) }}">
                <i class="fas fa-edit"></i>
              </a>
            </td>
            <td>
                <form action="{{route('beers.destroy', compact('beer')) }}" method="post">

                    @csrf

                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                    </button>

                </form>
            </td>
        </tr>
      @endforeach

    </tbody>
  </table>
  @endsection


