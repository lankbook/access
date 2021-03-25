<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="/pagedecss/style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav>

  <div class="container">
  
  
  <div class="text-center">
  <h1>liste des reservation</h1>
  </div>
  
  <div class="row">
  
      <tr class="shadow-sm p-3 mb-5 mt-5 rounded" >
  <table class="table pl-5 bg-light ">
      <thead class="bg-danger">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>

       

      <tbody>
      <br>
      
      <tr class="shadow-sm p-3 mb-5 mt-5 rounded" >
          <th scope="row ">1</th>
          <td></td>
          <td></td>
          <td><a href="" class="btn btn-primary">Modifier</a></td>
          <td><form action="" method="post"> @csrf
          <button class="btn btn-danger" type="submit">Supprimer</button> 
          </form></td> <br>
        </tr>
    
        
      </tbody>
     
    </table>
   
  </div>
  
<div class="card text-center">
  <div class="card-header">Featured</div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">
      With supporting text below as a natural lead-in to additional content.
    </p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
  <div class="card-footer text-muted">2 days ago</div>
</div>
               
    
</body>
</html>