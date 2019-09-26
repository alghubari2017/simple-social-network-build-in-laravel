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
  
  <button type="submit" class="btn btn-primary background-orange righttoleft">Edite</button>
  <button type="submit" class="btn btn-primary background-red righttoleft">Delete</button>
  <button type="submit" class="btn btn-primary background-color  righttoleft">Share</button>
  
</form>


                      </div>
                      <br><br><br>

                        
                      <table class="table ">
  
  <tbody>

  @if($posts->count()>0)
  @foreach($posts as $post)
  <div class=" table-responsive-sm background-green">
  
   <tr class="border-top background-orange border-right">

      <td class="border-left border-bottom "><a href=""><img class="imguseronpost" src="{{$post->photo}}"   width="100px" alt="{{$post->photo}}"></a></td>
      <th class="border-bottom" scope="row"><a class="nameuserpost" href="">ali alghubari</a></th>
      <th class="border-bottom"scope="row">
<div class="dropdown background-orange">
         <button class="btn btn-secondary dropdown-toggle background-orange" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             ---             
   </button>
  <div class="dropdown-menu background-orange" aria-labelledby="dropdownMenuButton">
   <a class="dropdown-item" href="{{route('posts.delet',['id'=>$post->id])}}">Delete</a>
   <a class="dropdown-item" href="{{route('posts.edit',['id'=>$post->id])}}">Edit</a>
   <a class="dropdown-item" href="#">Hide Post</a>
</div>
</div>
</th>
</tr>
       <tr class="border-right">
      <th class="border-left"scope="row"></th>
      <td>{{$post->content}}</td>
      <th scope="row"></th>

      </tr> 

      <tr class="border-right">
     
     
       <td colspan="3"><img class="img-thumbnail" src="{{$post->photo}}" hieght="100%"  width="100%" alt="" ></td>
       
      </tr> 
      <tr class="border-right">
      <td class="border-left"><a href="">20  </a></td>
      <th ><a href=""> 30  </a></th>
      <th><a href="">100 </a></th>
      </tr>
      <tr class="border-right border-bottom">
      <td class="border-left"><a href="">Like</a></td>
      <th ><a href="">Dislike</a></th>
      <th ><a href="">Comment</a></th>
      </tr >
      <tr>
      <td ><a href=""> </a></td>
      <th ><a href="">   </a></th>
      <th ><a href="">  </a></th>
      </tr>
     
    </div>
    @endforeach
    @else
    no recorder
    @endif

  



</tbody>
</table>    

               </div>
               ========================================================================
          
           </div>
           
        </div>
        
    </div>
    
</div>
    
@endsection
