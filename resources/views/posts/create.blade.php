@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row justify-content-center"> 
         <div class="col-md-8">
            <div class="card">
                <div class="card-header">dash</div>
                      <div class="card-body ">
                      

                       @if(count($errors)>0)
                        <ul class="navbar-nav mr-auto">

                             @foreach($errors->all() as $error)
                              <li class="nav-item active">
                               {{$error}}
                              <li>
                             @endforeach





                       </ul>
                       @endif

                      <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                           {{csrf_field()}}
                        
                         <div class="form-group ">
                           
                             <textarea class="form-control " name="content" rows="4" cols="8"></textarea>
                       </div>

                       <div class="form-group ">
                            <select class="form-control" id="category" name="category_id">
                                 
                                   
                             @foreach($categories as $category)
                             <option  value="{{$category->id}}" id="category_id">{{$category->name}}</option>
                             @endforeach

                                  
                                   
                            </select>

                        </div>
                        <div class="form-check">
                          @foreach($tags as $tag)
                         
                          <input class="form-check-input" type="checkbox"name="tags[]" value="{{$tag->id}}" id="defaultCheck2" >
                            <label class="form-check-label" for="defaultCheck2">
                           {{$tag->tag}} 
                            </label>
                            <br>
                            @endforeach
                       </div>
                        
                    <div class="form-group ">
                      <label for="photo ">image</label>
                      <input type="file" class="form-control-file background-green  " name="photo">
                    </div>
                 
  
  
  
  <button type="submit" class="btn btn-primary background-green righttoleft">Add Post</button>
  
  
  
</form>


                      </div>
                      <br><br><br>

                


               @if($posts->count()>0)
               @foreach($posts as $post)
               <div class="card "  style="width:90%; margin-left:5%; background:#e1e1e1; ">
               <div class="card-body">
  
   
    <a href="#" class="card-link"><img class="imguseronpost" src="{{$post->photo}}"   width="7%" alt="{{$post->photo}}"></a>
    <a href="#" class="card-link" style="margin-right:50%;">ali alghubari</a>
    <a href="#" class="card-link" >option</a>
  </div>

  <img class="img-thumbnail" src="{{$post->photo}}" hieght="100%"  width="100%" alt="" >
  <div class="card-body" style="background:white">
    
    <p class="card-text">{{$post->content}}.</p>
  </div>
  
  <div class="card-body" style="background:white">
    <a href="#" class="card-link">like</a>
    <a href="#" class="card-link" style="margin-right:60%;">dislike</a>
    <a href="#" class="card-link" >share</a>
  </div>
  <div class="card-body">
  <form>
 
    <div class="form-group">
     
      <textarea class="form-control " name="content" rows="2" cols="7"></textarea>
    </div>
    
    
  
  <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">add Comment</button>
    </div>
</form>
  </div>
  <div class="card-body">
  <div class="card mb-3" style="max-width: 600px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img class="imguseronpost" src="{{$post->photo}}"   width="20%" alt="{{$post->photo}}">
    </div>
    <div class="col-md-8">
      
        
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
       
    <a href="#" class="card-link">like</a>
    <a href="#" class="card-link" style="margin-right:60%;">replay</a>
   
 
     
    </div>
  </div>
</div>
    
  </div>
  
 
</div>
<br><br><br>

@endforeach
    @else
    no recorder
    @endif












           
        </div>
        
    </div>
    
</div>
    
@endsection
