@if(count($posts)>0)
        <main class="container">
            @foreach($posts as $post)
            <div class="p-4 p-md-5 mb-4 text-white bg-dark rounded">
                <div class="col-md-6 px-0">
                    <strong class="d-inline-block mb-2 text-light">{!!$post->category!!}</strong>
                    <h1 class="display-4 fst-italic">{!!$post->title!!}</h1>
                    <p class="lead my-3">{!!$post->metadata!!}</p>
                    <p class="lead mb-0">
                        <a href="/posts/{{$post->id}}" class="text-white fw-bold">Continue Reading...</a>
                    </p>
                </div>
            </div>
            @endforeach
        </main>
   @else
    <p>No Post Found</p>
@endif
