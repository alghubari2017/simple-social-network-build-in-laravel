@extends('layouts.app')

@section('content')
<div class="container" style=" background-color: #e1e1e1; " > 
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
                      </div>
        
        </div>
        
    </div>
                      <br><br><br>

                      <div class="container" style=" background-color: #e1e1e1; " > 
    <div class="row justify-content-center"> 
         <div class="col-md-8">


               @if($posts->count()>0)
               @foreach($posts as $post)
               <div class="card "  style="width:90%; margin-left:5%; background:white; ">
               <div class="card-body">
  
   
    <a href="#" class="card-link"><img class="imguseronpost" src="{{$post->photo}}"   width="7%" alt="{{$post->photo}}"></a>
    <a href="#" class="card-link" style="margin-right:50%; color:green; font-weight: bold;">ali alghubari</a>
    <a href="#" class="card-link"  style="color:orange; font-weight: bold;">option</a>
  </div>

  <img class="img-thumbnail" src="{{$post->photo}}" hieght="100%"  width="100%" alt="" >
  <div class="card-body" style="background:white">
    
    <p class="card-text">{{$post->content}}.</p>
  </div>
  
  <div class="card-body" style="background:white">
    <a href="#" class="card-link" style="color:green; font-weight: bold; ">like</a>
    <a href="#" class="card-link" style="margin-right:60%; color:red; font-weight: bold;">dislike</a>
    <a href="#" class="card-link" style="color:blue ; font-weight: bold;" >share</a>
  </div>
  <div class="card-body">
  <form    action="{{ route('comment.store',['post_id'=>$post->id,'user_id'=>Auth::user()->id ]) }}" method="POST" >
  {{csrf_field()}}
    <div class="form-group">
     
      <textarea class="form-control " name="comment" rows="2" cols="7"></textarea>
    </div>
    
    
  
  <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">add Comment</button>
    </div>
</form>
  </div>
  <div class="card-body" style="">
 
    
    
    @foreach($comments as $comment)
       
        @if($post->id == $comment->post_id)
        <div class="card " style="background:#e1e1e1; display: inline-block; margin-bottom: 5px; width:max-content;   border-radius: 50px 50px 50px; ">
        
        <table>
          
  <tr>
    
 
    <td> <a href="#" class="card-link"><img style="border-radius: 50%;" src="{{$post->photo}}"   width="50px" alt="{{$post->photo}}"></a><a href="#" style=" font-weight: bold;padding-left:1px;">ali alghubari</a></td>
    
    <td style="word-wrap:break-word">{{$comment->comment}}</td>
  </tr>
 
</table>

       
       
     


        
       
      
</div>

<table style="margin-left:30px;  ">
          
          <tr >
            
         
            <td style="padding-left:5px;  "> <a href="#" class="card-link"  style=" font-size: 13px; color:green; font-weight: bold;">like</a></td>
            <td style="padding-left:5px;  "> <a href="#" class="card-link"  style=" font-size: 13px; color:red; font-weight: bold;">dislike</a></td>
            <td style="padding-left:5px;  "> <a href="#" class="card-link"style=" font-size: 13px; color:orange; font-weight: bold;" >replay</a></td>
            <td style="padding-left:5px;  "> <a href="#" class="card-link" style=" font-size: 13px; color:pink; font-weight: bold;">since 1 minute</a></td>
           
          </tr>
         
        </table>
       @endif
   
  @endforeach
     
  
 
    
  </div>
  
 
</div>
<br><br><br>

@endforeach
    @else
    no recorder
    @endif

   










     
    
@endsection
