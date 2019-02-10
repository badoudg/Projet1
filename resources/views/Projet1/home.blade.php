
 @extends('layouts.navbar')


 @section('content')
    
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading"><h3>All people</h3></div>
    <div class="panel-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
             <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <!-- On recupere le id dans edit.php -->
              <a type="submit" class="btn btn-info" href="">Edit</a>
              <a type="submit" class="btn btn-danger"  href="">Delete</a>
            </td>
          </tr>
      </tbody>
    </table>


    </div>
  </div>
</div>
</body> 
</html>

@endsection