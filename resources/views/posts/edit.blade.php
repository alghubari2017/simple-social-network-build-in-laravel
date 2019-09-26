@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row justify-content-center"> 
         <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update post</div>
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

                      <form action="{{ route('posts.update',['id'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
                           {{csrf_field()}}
                        
                         <div class="form-group ">
                           
                             <textarea class="form-control " name="content" rows="4" cols="8" >{{$post->content}}</textarea>
                       </div>

                       <div class="form-group ">
                            <select class="form-control" id="category" name="category_id">
                                 
                                   
                            @foreach($categories as $category)
                                @if($category->id == $post->category_id)
                                 <option  value="{{$category->id}}" id="category_id" selected>{{$category->name}}</option>
                                @else
                                <option  value="{{$category->id}}" id="category_id" >{{$category->name}}</option>
                                @endif
                             @endforeach
                                   
                            </select>

                        </div>
                        <div class="form-check">
                          @foreach($tags as $tag)
                          <label class="form-check-label" for="defaultCheck2">
                             <input class="form-check-input" type="checkbox"name="tags[]" value="{{$tag->id}}" id="defaultCheck2"
                             @foreach( $post->tags as $ta)
                              @if($tag->id == $ta->id)
                              checked
                              @endif
                             
                             @endforeach
                              >
                        
                           {{$tag->tag}} 
                            </label>
                            <br>
                            @endforeach
                       </div>
                        
                    <div class="form-group ">
                      <label for="photo ">image</label>
                      <input type="file" class="form-control-file background-green  " name="photo">
                    </div>
                 
  
  
  
  <button type="submit" class="btn btn-primary background-green righttoleft">Update</button>
  
  
  
</form>


                      </div>
               </div>
          
           </div>
        </div>
    </div>
</div>
    
@endsection
