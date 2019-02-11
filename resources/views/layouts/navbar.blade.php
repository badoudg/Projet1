<!DOCTYPE html>
<html>
  <head>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="style.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <title></title>
  </head>

  <body>

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Navbar</a>
    </div>
      <ul class="nav navbar-nav">
      <li><a href="/home">Home</a></li>
      <li><a href="/form"  style="color:grey;">Create a person</a></li>
      </ul>
    </div>
  </nav>  
    
     @yield('content')

  </body> 

</html>