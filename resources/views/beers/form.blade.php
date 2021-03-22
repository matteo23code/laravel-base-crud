@php
//edit
if (isset($edit) && !empty($edit)) {
    $method = 'PUT';
    $url = route('beers.update', compact('beer'));
}else {
    //create
    $method ='POST';
    $url = route('beers.store');

}
@endphp

<form action="{{$url}}" method="post">
    @csrf

    @method($method)

    <div class="form-group">
        <label for="title">Brand</label>
        <input type="text" class="form-control {{$errors->has('brand') ? 'is-invalid' : ''}}" name="brand" placeholder="Brand" value="{{isset($beer) ? $beer->brand : ''}} ">
        <div class="invalid-feedback">
            {{$errors->first('brand')}}
          </div>
    </div>
    <div class="form-group">
        <label for="content">Name</label>
        <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" placeholder="Name" value="{{isset($beer) ? $beer->name : ''}} ">
        <div class="invalid-feedback">
            {{$errors->first('name')}}
        </div>
    </div>
    <div class="form-group">
        <label for="content">Type</label>
        <input type="text" class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}" name="type" placeholder="Type" value="{{isset($beer) ? $beer->type : ''}} ">
        <div class="invalid-feedback">
            {{$errors->first('type')}}
          </div>
    </div>
    <div class="form-group">
        <label for="content">Taste</label>
        <input type="text" class="form-control {{$errors->has('taste') ? 'is-invalid' : ''}}" name="taste" placeholder="Taste" value="{{isset($beer) ? $beer->taste : ''}} ">
        <div class="invalid-feedback">
            {{$errors->first('taste')}}
          </div>
    </div>
    <div class="form-group">
        <label for="content">Color</label>
        <input type="text" class="form-control {{$errors->has('color') ? 'is-invalid' : ''}}" name="color" placeholder="Color" value="{{isset($beer) ? $beer->color : ''}} ">
        <div class="invalid-feedback">
            {{$errors->first('color')}}
          </div>
    </div>
    <div class="form-group">
        <label for="content">alcohol</label>
        <input type="text" class="form-control {{$errors->has('alcohol') ? 'is-invalid' : ''}}" name="alcohol" placeholder="alcohol volume" value="{{isset($beer) ? $beer->alcohol  : ''}} ">
        <div class="invalid-feedback">
            {{$errors->first('alcohol')}}
          </div>
    </div>
    <div class="form-group">
        <label for="content">Image</label>
        <input type="text" class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" name="image" placeholder="Image Url" value="{{isset($beer) ? $beer->image : ''}} ">
        <div class="invalid-feedback">
            {{$errors->first('image')}}
          </div>
    </div>
    <input type="submit" value="Invia">
</form>
