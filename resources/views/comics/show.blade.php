@extends('layouts.app')

@section('content')
<img class="img-fluid" src="{{$comic->thumb}}" alt="">
<h1>{{$comic->title}}</h1>
<div>
    {{$comic->description}}
</div>
@endsection