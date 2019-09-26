@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row justify-content-center"> 
         <div class="col-md-8">
            <div class="card">
                <div class="card-header">posts</div>
                      <div class="card-body ">
                    
                      
                     
                     
                       <table class="table ">
  
                           <tbody>
 
                           @if($posts->count()>0)
                           @foreach($posts as $post)
                           <div class=" table-responsive-sm background-green">
                           
                            <tr class="border-top background-orange border-right">
                    
                               <td colspan="2" class="border-left border-bottom "><a href=""><img class="img-thumbnail" src="{{$post->photo}}"   width="50px" alt="">ali alghubari</a></td>
                              
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
               </div>
          
           </div>
        </div>
    </div>
</div>
    
@endsection
