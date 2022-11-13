@extends('layouts.create')
@section('content')
    <h2 class="mb-5">Edit Post</h2>
    {!!Form::open(['action'=>['App\Http\Controllers\PostController@update',$post->id],'method'=>'POST','class'=>'form','enctype'=>'multipart/form-data'])!!}
    {{-- Title --}}
        <div class="form-group mb-4">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title Goes Here...'])}}
        </div>
        {{-- Meta Description --}}
        <div class="form-group mb-4">
            {{Form::label('metadata','Meta Description')}}
            {{Form::text('metadata',$post->metadata,['class'=>'form-control','placeholder'=>'Meta Description(Max 50 Characters)'])}}
        </div>
        {{-- Category Dropdown --}}
        <div class="mb-4">
            {{Form::label('category','Select Category')}}
            {{Form::select('category',['World'=>'World','Sports'=>'Sports','Technology'=>'Technology','Design'=>'Design','Culture'=>'Culture','Business'=>'Business','Politics'=>'Politics','Opinion'=>'Opinion','Health'=>'Health','Science'=>'Science','Travel'=>'Travel'],$post->category)}}
        </div>

        {{-- Body Text --}}
        <div class="form-group mb-4">
            {{Form::label('body','Post Body')}}
            {{Form::textarea('body',$post->body,['id'=>'article-ckeditor', 'class'=>'ckeditor form-control','placeholder'=>'Write Your Post...'])}}
        </div>
        <div class="form-group mb-4">
            {{Form::label('cover_image','Cover Image')}}
            <div class="mb-2">
                {{Form::file('cover_image')}}
            </div>
        </div>
        {{Form::hidden('_method','PUT')}}
        <div class="mb-5">
            {{Form::submit('Post',['class'=>'btn btn-primary px-4'])}}
        </div>
    {!!Form::close()!!}
@endsection