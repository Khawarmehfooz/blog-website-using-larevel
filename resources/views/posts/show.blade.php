@extends('layouts.create')
@section('content')
<a href="/posts" class="btn btn-outline-dark mb-5">Go back</a>
<div class="mb-4">
    <img class="bd-placeholder-img" height="300" width="300" src="/storage/cover_images/{{$post->cover_image}}" alt="cover image">
</div>
<h2>{{$post->title}}</h2>
<div>
    {!!$post->body!!}
</div>
<hr>

    
        <small>Written on: {{$post->created_at}} by: {{$post->user->name}}</small>
        <hr>
@if(!Auth::guest())
        @if(Auth::user()->id==$post->user_id)
        <div class="mb-4">
            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit Post</a>

{{-- Delete --}}
        {!!Form::open(['action'=>['App\Http\Controllers\PostController@destroy',$post->id],'method'=>'POST','class'=>'float-end'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}

        {!!Form::close()!!}
        </div>
    @endif
@endif

@endsection