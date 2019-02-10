@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
        @foreach ($accessories as $bike)
   <div class="col-md-4 col-sm-4">
     <div class="card">
        <img class="card-img-top img-fluid" src="{{asset('public/storage/image')}}/{{$bike->image}}" 
            alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
  </div>
   </div>
        @endforeach
</div>
</div>
@endsection