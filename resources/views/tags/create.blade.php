@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row justify-content-center"> 
         <div class="col-md-8">
            <div class="card">
                <div class="card-header">tag</div>
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

                      <form action="{{ route('tag.store') }}" method="POST" >
                           {{csrf_field()}}
                        
                         <div class="form-group ">
                           
                         <input class="form-control" type="text" placeholder="add tag" name="tag">
                       </div>

                      
                    
  
  
  
  <button type="submit" class="btn btn-primary background-green righttoleft">Add Post</button>
  </form>
  <form action="{{ route('category.index') }}" method="GET" >
  <button type="submit" class="btn btn-primary background-orange righttoleft">View</button>
</form>
  <button type="submit" class="btn btn-primary background-red righttoleft">Delete</button>
  <button type="submit" class="btn btn-primary background-color  righttoleft">Share</button>
  



                      </div>
               </div>
          
           </div>
        </div>
    </div>
</div>
    
@endsection
