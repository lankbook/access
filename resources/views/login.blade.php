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
<body   >
 <div class="container-fluid">
  <div class="container">
   <div class="row justify-content-center pt-5 login ">
    <div class="col-md-4 bg-light">
     <div class="panel panel-info">
      <div class="panel-heading">
      <div class="panel-body">
      <form class="form-signin pt-5 "  method="POST" action="{{url('login')}}" >
    
        @csrf
       <div class="form-label-group">
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputEmail">Email address</label>
       </div>
       <div class="form-label-group">
        <input   type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <label for="inputPassword">Password</label>
       </div>

       <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
       <p class="mt-5 mb-3 text-muted text-center">  &copy; copyright {{date('d/m/Y')}} </p>
       </form>
       </div>
            

     </div>
    </div>
   </div>
  
   </div>
  
  
  </div>
 
 </div>


</body>
</html>