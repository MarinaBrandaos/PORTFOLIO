@extends('layouts.default')
@section('content')
@if ($errors->any())

    @foreach ($errors->all() as $error)
    
    {{ $error }}

    @endforeach

@endif
<section class= "admin-container">
    @php 
       $posts = App\Models\Post::all();
    @endphp
    
    <div class="admin">
        <h1>ADMIN DASHBOARD</h1>
    </div>
    <div class="createPost">
        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="Title" required>
            <input type="text" name="description" placeholder="description" required>
            <input type="text" name="category" placeholder="Category" required>
            <input type="text" name="data" placeholder="data" required>
            <input type="file" name="image" placeholder="Image" accept="image/png/jpeg/mp4">
            <button type="submit">Create Post</button>
        </form>
    </div>
    <div class="posts">
            <ul>
                @foreach($posts as $post)
                <li>
                    <a href=" {{$post->category}}"> {{$post->title }}</a>
                    <p>{{ $post->description }}</p>
                    <p class="date">{{ $post->date }}</p>
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Imagem do Post">
                    <a href="{{route('post.form', $post->id)}}">Edit</a>
                    <form action="{{route('post.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
                @endforeach
            </ul>
    
        </div>
</section>

@endsection

