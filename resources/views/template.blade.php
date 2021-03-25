<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/pagedecss/style.css">
</head>
<body classe="inscrit" >
 <div class="container-fluid">
 
   <div class="container">

   <div class="row justify-content-center pt-5">


   <div class="col-md-4 login">
   
   <div class="panel panel-info">
   
    <div class="panel-heading">
    <h2  classe="text-center">s'inscrire</h2>
     <div class="panel-body">
     <form class="form-signin bg-light pt-5 p-3 br-5"  method="POST" action="{{url('users')}}" >
    
      @csrf
      
      <div class="form-label-group">
       <input type="text" name="name" id="name" class="form-control" placeholder="name" required="" autofocus="">
        <label for="text">name</label>
      </div>
      <div class="form-label-group">
      <input type="firstname" name="firstname" id="firstname" class="form-control" placeholder="firstname" required="" autofocus="">
        <label for="inputEmail">firstname</label>
      </div>


      <div class="form-label-group">
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input   type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <label for="inputPassword">Password</label>
      </div>
      <input type="hidden" id="custId" name="statu" value="nonvalide">
      <input type="hidden" id="custId" name="role" value="apprenant">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">  &copy; copyright {{date('d/m/Y')}} </p>
    </form>
    

     </div>
    </div>
   </div>
  
   </div>
  
  
  </div>
 
 </div>

 
</body>
</html>