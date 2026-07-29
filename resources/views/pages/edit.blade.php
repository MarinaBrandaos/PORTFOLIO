@extends('layouts.default')
@section('content')
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Post</div>
                    <!-- <div class="card-body">[] -->
                        <form method="POST" action="{{ route('post.update', $post->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" value="{{ $post->description }}" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <input type="text" class="form-control" id="category" name="category" value="{{ $post->category }}" required>
                            </div>
                            <div class="form-group">
                                <label for="data">Data</label>
                                <input class="form-control" id="data" name="data" required>{{ $post->data }}</input>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/png/jpeg">{{ $post->image }}</input>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection