@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row justify-content-center"> 
         <div class="col-md-8">
            <div class="card">
                <div class="card-header">tag</div>
                      <div class="card-body ">

                      

                      <form action="{{ route('user.store') }}" method="post" >
                           {{csrf_field()}}
                        
                         <div class="form-group ">
                           
                         <input class="form-control" type="text" placeholder="add name" name="name">
                         <input class="form-control" type="email" placeholder="add email" name="email">
                         
                       </div>

                      
                    
  
  
  
  <button type="submit" class="btn btn-primary background-green righttoleft">Add User</button>
  </form>
 
  



                      </div>
               </div>
          
           </div>
        </div>
    </div>
</div>
    
@endsection
