@extends('main')

@section('content')

         <div class="col-md-8 offset-md-3">
             <div class="card">
                 <div class="card-header">
                     Blog Posts:
                 </div>
                 <div class="card-body">
                     <h2 class="diplay-3">
                         {{$post->title}}
                     </h2>
                     <p class="blog-post-meta">
                        {{$post->created_at->toFormattedDateString()}}
                        by <a href="#">{{Auth::user()->name}}</a>
                    </p>
                     <hr>
                     {{$post->body}}



                     

                 </div>
                 <hr>
                 
             </div><br><br>
            
                    <div class="comments">
                        <h4>Comments</h4>
                        <ul class="list-groub">
                           @foreach ($post->comments as $comment)
                            <article>
                               <li class="list-group-item">
                                  
                                   {{$comment->body}}


                                   <strong class="text-right">
                                        {{$comment->created_at->diffForHumans()}}
                                    </strong>
                                </li>
                                <br>
                            </article>
                           @endforeach
                        </ul>
                       </div>

                       {{-- A comment form--}}
                       <hr>
                       <div class="card">
                           <div class="card-block">
                               <form action="/post/{{$post->id}}/comment" method="POST">
                                {{ csrf_field() }}
                                   <div class="form-group">
                                       <textarea name="body" class="form-control" placeholder="Your Comment..."></textarea>
                                   </div>

                                   <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-block btn-outline-primary">Comment</button>
                                   </div>
                               </form>

                           </div>
                       </div>
               
         </div>
        </div>
    
@endsection
   