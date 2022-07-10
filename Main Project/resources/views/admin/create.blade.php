@extends('layouts/app')

@section('content')
<div class="container" style="margin-left:230px">
    <div class="row">
        <div class="col-8">
            <form  enctype="multipart/form-data" id="create" action="/admin/shows" method="post">
                @csrf 
                <div class="card">
                        <h1>Create a Character</h1>
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" />
                            @error('name')
                            <span style="color: #900">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image" />
                            @error('image')
                            <span style="color: #900">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="occupation" class="form-label">Occupation</label>
                            <input type="text" name="occupation" class="form-control" id="occupation" value="{{ old('occupation')}}" />
                            @error('occupation')
                                <span style="color: #900">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="origin" class="form-label">Origin</label>
                            <input type="text" name="origin" class="form-control" id="origin" value="{{ old('origin')}}" />
                            @error('origin')
                                            <span style="color: #900">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3">{{ old('description')}}</textarea>
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