@extends('base')

@section('content')
    <form action="{{route('beers.store')}}" method="post">
        @csrf
        {{-- scriviamo a mano l'input --}}
        {{-- <input name="_method" type="hidden" value="POST"> --}}
        {{-- oppure usiamo blade --}}
        @method('POST')
        <div class="form-group">
            <label for="title">Brand</label>
            <input type="text" class="form-control" name="brand" placeholder="Brand">
        </div>
        <div class="form-group">
            <label for="content">Name</label>
            <input type="text" class="form-control" name="Name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="content">Type</label>
            <input type="text" class="form-control" name="Type" placeholder="Type">
        </div>
        <div class="form-group">
            <label for="content">Taste</label>
            <input type="text" class="form-control" name="taste" placeholder="Taste">
        </div>
        <div class="form-group">
            <label for="content">Color</label>
            <input type="text" class="form-control" name="color" placeholder="Color">
        </div>
        <div class="form-group">
            <label for="content">alcohol</label>
            <input type="text" class="form-control" name="alcohol" placeholder="alcohol volume">
        </div>
        <div class="form-group">
            <label for="content">Image</label>
            <input type="text" class="form-control" name="image" placeholder="Image Url">
        </div>
        <input type="submit" value="Invia">
    </form>

@endsection
