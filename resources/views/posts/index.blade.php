@extends('main')

@section('content')


         <div class=" col-sm-8">
         
                @foreach ($posts as $post)

                <div class="blog-post">
                    <div class="card">
                        <div class="card-header">
                                <h2 class="blog-post-title">

                                    {{$post->title}}
                               
                                </h2>
                                <p class="blog-post-meta">
                                    {{$post->created_at->toFormattedDateString()}}
                                    by <a href="#">{{Auth::user()->name}}</a>
                                </p>
                            </div>  
                         <div class="card-body">
                                {{$post->body}}
                         </div>
                         
                    <div class="card-footer">
                        <div class="row">
                    <div class="col-md-3">
                            <a class="btn -btn-sm btn-secondry nav-link" href="#">
                                <i class=" fa fa-thumbs-up "></i>       
                                Like 
                            </a>
                       
                    </div> 

                    <div class="col-md-3">
                        <a class="btn -btn-sm btn-secondry nav-link"  href="post/{{$post->id}}">
                            <i class=" fa fa-comment  "></i>   
                            Comment 
                        </a>
                     </div> 

                     <div class="col-md-3">
                            <a class="btn -btn-sm btn-secondry nav-link" href="post/{{$post->id}}/edit">
                                <i class=" fa fa-edit "></i>    
                                Edit    
                            </a>
                       
                    </div> 
                    </div>    
                </div>  
             </div>
        </div>
                @endforeach
           
        </div>

        <div class="col-md-3 text-lef">
                <a class="btn btn-block btn-outline-success" href="{{route('post.create')}}">Create A Post</a>
        </div>
        
    
@endsection
   