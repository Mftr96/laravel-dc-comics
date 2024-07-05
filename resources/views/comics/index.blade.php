@extends('layouts.app')
@section('content')
    <h1>ecco i fumetti disponibili !</h1>
    @foreach ($catalog as $fumetto)
        <div>
            <h2>{{$fumetto->title}}</h2>
            <img src="{{$fumetto->thumb}}" alt="">
            <p>{{$fumetto->price}}</p>
        </div>
    @endforeach
@endsection