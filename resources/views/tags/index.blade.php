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
 

    @foreach($tags as $tag)
    <tr>
    <th scope="row">{{$tag->id}}</th>
      <td>{{$tag->tag}}</td>
      <td><a class="background-green mycolor" href="{{ route('tag.edit',['id'=>$tag->id]) }}">{{'Edit'}}
      </a>
      
      </td>
      <td><a class="background-red mycolor" href="{{ route('tag.delete',['id'=>$tag->id]) }}">{{'Delete'}}</a></td>
                              
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
