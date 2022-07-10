@extends('layouts/home')

@section('content')
<div id="det" style="margin-top: 50px;">
<img src="/storage/{{$show->image}}" alt="pirate" style="width: 250px;">
<div id="details" style="margin-top: 30px;">
<p><strong>Name: </strong>{{$show->name}}</p>
<p><strong>Occupation: </strong>{{$show->occupation}}</p>
<p><strong>Origin: </strong>{{$show->origin}}</p>
<p><strong>Description: </strong>{{$show->description}}</p>
</div>

@endsection