<@extends('layouts.main')

@section('content')

<div>
    <img src="{{$user->img}}" alt="avatar">
    <div>{{$user->name}}</div>
    <div>{{$user->email}}</div>
    <div>{{$user->phone}}</div>
</div>



@endsection