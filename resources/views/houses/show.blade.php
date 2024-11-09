@extends('layouts.default')
@section('judul')

@endsection

@section('content')

<img src="{{asset('image/'.$house->image)}}" class="w-full h-48 object-cover rounded-t-lg py-20" alt="">
    <h1>{{$house->name}}</h1>
    <p>Ramz Noob</p>
@endsection