@extends('layouts/home')

@section('content')
<table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Picture</th>
      <th scope="col">Name</th>
      <th scope="col">Occupation</th>
      <th scope="col">Origin</th>
  </thead>
  <tbody>
    @foreach($shows as $show)
    <tr>
      <th scope="row"><img src="storage/{{$show->image}}" alt="char" style="width: 150px;"></th>
      <td><a href="/detail/{{$show->id}}">{{$show->name}}</a></td>
      <td>{{$show->occupation}}</td>
      <td>{{$show->origin}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection