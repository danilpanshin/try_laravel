@extends('layout')

@section('content')
    {{ $foo }} Panshin <br>
    @foreach($skills as $skill)
        {{$skill}} <br>
    @endforeach
@endsection
