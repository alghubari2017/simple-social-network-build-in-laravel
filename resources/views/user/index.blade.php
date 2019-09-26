@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row justify-content-center"> 
         <div class="col-md-8">
            <div class="card">
                <div class="card-header">tag</div>
                      <div class="card-body ">

                      

                     
                       <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">num</th>
      <th scope="col">Name</th>
      <th scope="col">edite</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
 

    @foreach($user as $user)
    <tr>
    <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>
     
     
     <img class="img-thumbnail" src="F:\xampp\htdocs\lara\public\storage\avatar\a.png" alt="">  
      
      
      </td>
     
      <td>
       @if($user->admin)
       {
        <a class="background-green mycolor" href="{{route('user.notadmin',['id'=>$user->id])}}">  delete admin</a>
       }
       @else
   
       <a class="background-red mycolor" href="{{route('user.admin',['id'=>$user->id])}}">make admin</a>
       @endif
     </td>
                              
    @endforeach
      
    
     
    </tr>
    
  </tbody>
</table>


                      </div>
               </div>
          
           </div>
        </div>
    </div>
</div>
    
@endsection
