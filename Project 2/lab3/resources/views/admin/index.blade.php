
@extends('layouts/app')
@section('content')
    <h1 class="text-center">Posts</h1>
    <div class="d-flex justify-content-center">
        <div>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
        </tr>
        @endforeach
    </table>
    <div class="paginate">
        {!! $posts->links('pagination::bootstrap-5') !!}
    </div>
    </div>
    </div>
@endsection