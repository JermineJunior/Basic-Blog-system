<div class="wrapper">
<header class="blog-header py-3" id="top">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
     
    </div>
    <div class="col-4 text-center">
      <a class="blog-header-logo text-dark" href="#">Jack Blog</a>
    </div>
    {{--  if not logged  --}}
    
    <div class="col-4 d-flex justify-content-end align-items-center search">
      <input type="search" name="search" class="form-control md">
      <a class="text-muted" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
      </a>

      @if (Auth::check() == false)
      <a class="btn btn-sm btn-outline-primary box-white" href="/register">Sign up</a>
    {{--  if logged in  --}}     
      @else
      <a class="btn btn-sm btn-secondry" href="/logout">{{Auth::user()->name}}</a>
      @endif
    </div>
    
  </div>
</header>
</div>

  <nav class="nav nav-bar-taps d-flex justify-content-between">
    <a class="p-2 text-muted nav-link" href="{{route('home')}}">Home</a>
    <a class="p-2 text-muted nav-link" href="{{route('post.index')}}">Posts</a>
    <a class="p-2 text-muted nav-link" href="#">Contact</a>
    <a class="p-2 text-muted nav-link" href="#">About</a>
    <a class="p-2 text-muted nav-link" href="#">Tags</a>
    
  
  </nav>


