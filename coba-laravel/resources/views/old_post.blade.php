@extends('layouts/main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>

                <p>
                    by. <a href="/posts?authors={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                </p>
                
                @if($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid">
                    </div>
                @else
                    <img src="https://picsum.photos/1200/400?random=2" class="img-fluid">
                @endif

                <article class="my-3">
                    {!! $post->body !!}
                </article>
                
                <a href="/blog" class="text-decoration-none d-block mt-3">back to posts</a>
            </div>
        </div>
    </div>
    
@endsection