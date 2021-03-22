@extends('base')

@section('content')

@include('beers.form',['edit' => false])
{{-- uguale a  ['create' => true]--}}
@endsection
