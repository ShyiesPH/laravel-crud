@extends('posts.layout')
@section('content')
<div class="card mt-5">
    <h2 class="card-header">Add New Post</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a class="btn btn-primary btn-sm" href="{{ route('posts.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <!-- Fixed Category Select -->
            <div class="mb-3">
                <label for="category_id" class="form-label"><strong>Category:</strong></label>
                <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
                    <option value="" selected disabled>Select a Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- Fixed Title Input -->
            <div class="mb-3">
                <label for="inputTitle" class="form-label"><strong>Title:</strong></label>
                <input
                    type="text"
                    name="title"
                    class="form-control @error('title') is-invalid @enderror"
                    id="inputTitle"
                    placeholder="Title"
                    value="{{ old('title') }}">
                @error('title')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- Description Input -->
            <div class="mb-3">
                <label for="inputDescription" class="form-label"><strong>Description:</strong></label>
                <textarea
                    class="form-control @error('description') is-invalid @enderror"
                    style="height:150px"
                    name="description"
                    id="inputDescription"
                    placeholder="Description">{{ old('description') }}</textarea>
                @error('description')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </form>
    </div>
</div>
@endsection
