@extends('layouts.app')
@section('content')
        <div class="container">
    <div class="row g-5">
    {{-- Post --}}

    <div class="col-md-8">
        @foreach($posts as $post)
        
        <h1 class="pb-4 mb-4 fst-italic border-bottom">{!!$post->title!!}</h1>
        <p>{!!$post->body!!}</p>
        @endforeach
        

        {{-- <figure>
            <blockquote class="blockquote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, nulla.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Someone Famous in <cite>Source Title</cite>
            </figcaption>
        </figure> --}}
    </div>

    {{-- Side bar --}}
    <div class="col-md-4">
        <div class="position-sticky" style="top:2rem;">
            {{-- About --}}
            <div class="p-4 mb-3 bg-secondary rounded text-white">
                <h4 class="fst-italic">About</h4>
                <p class="mb-0">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint eveniet quas officiis eius aspernatur, asperiores sit libero temporibus quam dolor!
                </p>
            </div>
            {{-- Archives --}}
            <div class="p-4">
                <h4 class="fst-italic">Archives</h4>
                <ol class="list-unstyle mb-0">
                    <li><a href="#">Jan 2022</a></li>
                    <li><a href="#">Feb 2022</a></li>
                    <li><a href="#">Mar 2022</a></li>
                    <li><a href="#">Apr 2022</a></li>
                    <li><a href="#">May 2022</a></li>
                    <li><a href="#">Jun 2022</a></li>
                    <li><a href="#">July 2022</a></li>
                    <li><a href="#">Aug 2022</a></li>
                    <li><a href="#">Sep 2022</a></li>
                    <li><a href="#">Oct 2022</a></li>
                    <li><a href="#">Nov 2022</a></li>
                    <li><a href="#">Dec 2022</a></li>
                </ol>
            </div>

            {{-- Social --}}
            <div class="p-4">
                <h4 class="fst-italic">Social</h4>
                <ul class="list-unstyle" >
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">LinkedIn</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
</div>
        
@endsection
