@extends('layouts/app')

@section('content')
<div class="container" style="margin-left:230px">
    <div class="row">
        <div class="col-8">
            <form  enctype="multipart/form-data" id="edit" action="/admin/shows/{{ $show->id }}" method="POST">
                @csrf 
                @method('PUT')
                <div class="card">
                        <h1>Edit a Post</h1>
                    <div class="card-body">

                        <div class="mb-3">
                            <input type="hidden" name="id" value="{{ $show->id }}" />
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $show->name) }}" />
                            @error('name')
                            <span style="color: #900">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            @if($show->image)
                                <img src="/storage/{{ $show->image }}" alt="{{ $show->title }}" 
                                        style="height: 100px;width:auto"/><br />
                            @endif
                            <input type="file" name="image" class="form-control" id="image" />
                            @error('image')
                                            <span style="color: #900">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="occupation" class="form-label">Occupation</label>
                            <input type="text" name="occupation" class="form-control" id="occupation" value="{{ old('occupation', $show->occupation) }}" />
                            @error('occupation')
                                <span style="color: #900">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="origin" class="form-label">Origin</label>
                            <input type="text" name="origin" class="form-control" id="origin" value="{{ old('origin', $show->origin) }}" />
                            @error('origin')
                                            <span style="color: #900">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $show->description) }}</textarea>
                        @error('description')
                                        <span style="color: #900">{{ $message }}</span>
                        @enderror
                        </div><br />
                        <p><button type="submit" class="btn btn-success">Submit</button></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection