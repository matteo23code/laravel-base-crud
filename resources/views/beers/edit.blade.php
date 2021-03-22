@extends('base')

@section('content')
 {{--
    CAMBIARE METHOD DA POST A PUT IN EDIT
    LASCIARE LA GESTIONE DEGLI ERRORI
    ENDPOINT DELLA FORM
    CAMBIA IL VALUE E DIPENDE DALL ESEISTENZA O MENO DI UN OGGETTO

    --}}


@include('beers.form',['edit' => true])

@endsection
