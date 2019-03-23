@extends('main')

@section('content')
<div class="col-md-12">
  <h2 class="display-4 text-center">Laravel Blog Post</h2>
  <hr>
</div>

    <div class="col-sm-8">
                
           
        @foreach ($posts as $post)
               <div class="blog-post">
                <h2 class="blog-post-title">

                        {{$post->title}}
                   
                </h2>
                    <p class="blog-post-meta">
                        {{$post->created_at->toFormattedDateString()}}
                        by 
                    </p>

                    {{$post->body}}
        @endforeach
            </div>
            
        <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a> 
        </nav>
            
    </div>
       
   
    <br>
@endsection
   