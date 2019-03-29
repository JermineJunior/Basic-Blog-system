@extends('main')

@section('content')

<h2 class="display-4">Create Post: </h2>

<hr>



         <div class="col-sm-8 offset-md-3">
       
            <form method="POST" action="/post">
                @csrf
                {{ csrf_field() }}
                <div class="form-group"> 
                    <label for="title">Title</label>
                        <input type="text"  class="form-control" name="title" >
                 </div>

                 <div class="form-group">
                    <label for="body">Body</label>
                        <textarea name="body" class="form-control" cols="20" rows="8" ></textarea>
                 </div>
            <div class="form-group">
                 <button type="submit" class="btn btn-lg btn-block btn-outline-success">Publish</button>
            </div>
                </form>

            
    
</div>  
@include('partials._errors')
@endsection
   