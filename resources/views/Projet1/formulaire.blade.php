@extends('layouts.navbar')


@section('content')

<!-- Formulaire -->
<div class="container">
<form class="form-horizontal" action="home.php" method="post">
<div class="row">
  <div class="form-group">
    <label class="control-label col-sm-2" for="Name">Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="Name" placeholder="Enter name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Email">Email:</label>
    <div class="col-sm-6"> 
      <input type="email" class="form-control" name="Email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" >Submit</button>
    </div>
  </div>
 </div>
</form>
</div>
</body> 

@endsection