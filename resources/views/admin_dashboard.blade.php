@extends('layouts.admin_app')
@section('admin_content')
<div class="container-fluid">
	
<br><br><br>


<div class="container-fluid">
    <table class="table table-dark table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>name</th>
          <th>price</th>
          <th>option</th>
          <th>Description</th>
        
@foreach ($bikes as $bike)
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>{{$bike->name}}</td>
          <td>{{$bike->price}}</td>
          <td>{{$bike->option}}</td>
          <td>{{$bike->description}}</td>
         
          
        </tr>
      </tbody>
@endforeach

<!-- //table for parts
     -->  
      </table>
  </div>
  <br>
   <br>
<div class="container-fluid">
    <table class="table table-dark table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>name</th>
          <th>price</th>
          <th>option</th>
          <th>Description</th>
        
@foreach ($parts as $part)
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>{{$part->name}}</td>
          <td>{{$part->price}}</td>
          <td>{{$part->option}}</td>
          <td>{{$part->description}}</td>
         
          
        </tr>
      </tbody>
@endforeach
    </table>
  </div>
  <br>
   <br>


 <div class="container-fluid">
    <table class="table table-dark table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>name</th>
          <th>price</th>
          <th>option</th>
          <th>Description</th>
        
@foreach ($accessories as $accessory)
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>{{$accessory->name}}</td>
          <td>{{$accessory->price}}</td>
          <td>{{$accessory->option}}</td>
          <td>{{$accessory->description}}</td>
         
          
        </tr>
      </tbody>
@endforeach
    </table>
  </div>
  <br>
   <br>
@endsection