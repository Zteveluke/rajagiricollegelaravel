<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/student">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/bus">Bus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/book">Book</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
   <form action="/facultyread" method="post">
   {{ csrf_field() }}
   <table class="table">
   <tr>
       <td>Name</td>
       <td><input name="fname" type="text" class="form-control"></td>
   </tr>
   <tr>
       <td>Designation</td>
       <td><input name="fdes" type="text" class="form-control"></td>
   </tr>
   <tr>
       <td>College Name</td>
       <td><input name="fcollege" type="text" class="form-control"></td>
   </tr>
   <tr>
       <td>Contact Number</td>
       <td><input name="fcontact" type="number" class="form-control"></td>
   </tr>
   <tr>
       <td></td>
       <td><button class="btn btn-warning" type="submit">SUBMIT</button></td>
   </tr>
   </table> 
</body>
</html>