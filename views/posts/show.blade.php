@extends('posts.layout')
@section('content')
<div class="card mt-5">
    <h2 class="card-header">Show Post</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a class="btn btn-primary btn-sm" href="{{ route('posts.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <div class="row">
            <!-- Added Category Field -->
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                <div class="form-group">
                    <strong>Category:</strong> <br />
                    <span class="badge bg-secondary fs-6">{{ $post->category->name ?? 'Uncategorized' }}</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                <div class="form-group">
                    <strong>Title:</strong> <br />
                    {{ $post->title }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Description:</strong> <br />
                    {{ $post->description }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection