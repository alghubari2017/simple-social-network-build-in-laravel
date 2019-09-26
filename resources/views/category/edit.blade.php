@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row justify-content-center"> 
         <div class="col-md-8">
            <div class="card">
                <div class="card-header"> edite category to {{$category->name}}</div>
                      <div class="card-body ">

                      

                      <form action="{{ route('category.update',['id'=>$category->id]) }}" method="POST" >
                           {{csrf_field()}}
                        
                         <div class="form-group ">
                           
                         <input class="form-control" type="text" value="{{$category->name}}" name="name">
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
