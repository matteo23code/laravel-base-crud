<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css') }}" type="text/css">
</head>
<body>

    {{-- @foreach ($beers as $beer)
        <p>{{$beer->name}}</p>
    @endforeach
 --}}

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
            <td><img src="{{$beer->image}}" alt=""></td>
        </tr>
      @endforeach

    </tbody>
  </table>
</body>
</html>
