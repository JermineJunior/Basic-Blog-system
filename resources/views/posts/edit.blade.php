@extends('main')

@section('content')

<h2 class="display-4">Edit Your Post: </h2>
<hr>


         <div class="col-sm-8 offset-md-3">
       
            
            
            {!! Form::model('',  array('route' => array('post.update' , $post->id) , 'method' => 'PUT')) !!}
            

            
            {!! Form::label('title', 'Title', []) !!}
            
            {!! Form::text("title", $post->title, ['class'=>'form-control']) !!}

         

         
            {!! Form::label('body', 'Body', []) !!}
            
            {!! Form::textarea('body', $post->body, ['class'=>'form-control']) !!}
            <br>
            
            {!! Form::submit("Save Changes", ['class' => '"btn btn-lg btn-block btn-outline-success']) !!}

               <br>
               {!! Form::model('' ,array('route' => array('post.destroy' , $post->id) ,'method' => 'DELETE'))!!}
                
                {!! Form::submit('Delete', ['class' => '"btn btn-lg btn-block btn-outline-danger']) !!}
                
               {!! Form::close() !!}
            
            {!! Form::close() !!}
            
            
            {{--  <form method="PUT" action="{{route('post.update',$post->id)}}">
                @csrf
                {{ csrf_field() }}
                <div class="form-group"> 
                    <label for="title">Title</label>
                        <input type="text"  class="form-control" name="title" value="{{$post->title}}">
                 </div>

                 <div class="form-group">
                    <label for="body">Body</label>
                        <textarea name="body" class="form-control" cols="20" rows="8">{{$post->body}}</textarea>
                 </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-block btn-outline-success">Save Changes</button>
                 <form action="{{route('post.destroy',$post->id)}}">
                    <button type="submit" class="btn btn-lg btn-block btn-outline-danger">Delete</button>
                 </form>
            </div>
                </form>

              --}}
    
</div>  
@include('partials._errors')
@endsection
   