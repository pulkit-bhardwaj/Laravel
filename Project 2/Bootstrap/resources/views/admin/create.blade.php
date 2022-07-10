@extends('layouts/blog')
<h1>Create a Post</h1>

<div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <form action="/admin/posts" method="post" class="m-4">
@csrf
    <body>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title"
                value="{{ old('title') }}">
            @error('title')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">content</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"
                value="{{ old('') }}"></textarea>
            @error('content')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <select class="form-select" name="category_id">
            <option selected value="">Please select a category</option>
            @foreach ($categories as $id => $name)
                <option @if (old('category_id') == $id) selected @endif value="{{ $id }}">
                    {{ $name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary my-3">Submit</button>
</form>
            </div>
            <div class="col-md-3"></div>

        </div>

</body>

</html>
