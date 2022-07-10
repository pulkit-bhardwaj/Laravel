@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-8">

           <a href="/admin/create" class="btn btn-primary" style="margin: 7px">Add a Character</a>
            <form class="form-inline my-2 my-lg-0" action="/admin" >
                <input class="form-control mr-sm-2" style="margin: 7px" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" style="margin: 7px" type="submit">Search</button>
            </form>
            <br />
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach($shows as $show)
                        <tr>
                            <td>{{ $show->id }}</td>
                            <td>{{ $show->name }}</td>
                            <td><img src="/storage/{{ $show->image }}" height="100px" width="100px"/></td>
                            <td><a href="/admin/shows/edit/{{ $show->id }}" class="btn btn-success">Edit</a></td>
                            <td><form method="POST" action="/admin/shows/{{ $show->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $show->id }}" />
                                    <button class="btn btn-danger" onclick="return confirm('Do you really want to delete {{ $show->name }}?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
            <div class="Paginate">
                    {!! $shows->links()!!}
            </div>

        </div>
    </div>
</div>

@endsection
