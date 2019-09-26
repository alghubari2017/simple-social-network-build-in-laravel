@extends('layouts.app')

@section('content')
<div class="container-main"> 
    <div class="container-post"> <div class="container">
    <form action="/action_page.php">
    
    <div class="row">
      <div class="col-25">
       
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
    </form>
  </div></div>
</div>
@endsection
