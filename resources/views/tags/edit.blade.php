@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row justify-content-center"> 
         <div class="col-md-8">
            <div class="card">
                <div class="card-header"> edite tag to {{$tag->tag}}</div>
                      <div class="card-body ">

                      

                      <form action="{{ route('tag.update',['id'=>$tag->id]) }}" method="POST" >
                           {{csrf_field()}}
                        
                         <div class="form-group ">
                           
                         <input class="form-control" type="text" value="{{$tag->tag}}" name="tag">
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
