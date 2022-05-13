<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>REGISTER!</title>
  </head>
  <body>
     
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WsCube Tech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/register')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/customer')}}">Customer</a>
        </li>
     
      </form>
    </div>
  </div>
</nav>
   
      <div class="container">
           <form action="{{url('/')}}/register" method="post">
               <!-- @csrf= used  for post method to call -->
               @csrf


              <!-- <pre>
               @php
                   print_r($errors->all());
               @endphp
               <pre> -->

           
           <div class="mb-3">
               <!-- x=component -->
               <x-input type="text" name="$name" label="Please enter your name"/>
               <x-input type="email" name="$email" label="Please enter your email"/>
               <x-input type="password" name="$password" label="Password"/>
               <x-input type="password" name="$password_confirmation" label="Confirm password"/>
                  <button type="submit" class="btn btn-primary">Submit</button>     
            </div>
             </form>
       </div>
   

  
  </body>
</html>