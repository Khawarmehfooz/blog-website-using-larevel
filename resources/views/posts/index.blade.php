@extends('layouts.post')
@section('content')
    <h1>Recent Posts</h1>
    @if(count($posts)>0)
    <div class="row mb-2">
        @foreach($posts as $post)
            <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">{{$post->category}}</strong>
                    <h3 class="mb-0">{{$post->title}}</h3>
                    <div class="mb-1 text-muted">Written on: {{$post->created_at}} by {{$post->user->name}}</div>
                    <p class="card-text mb-auto">
                        {{$post->metadata}}
                    </p>
                    <a href="/posts/{{$post->id}}" class="stretched-link">Continue Reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="200" src="/storage/cover_images/{{$post->cover_image}}" alt="cover image">
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}

    </div>
        
    @else
        <p>No Posts Found</p>
    @endif

@endsection