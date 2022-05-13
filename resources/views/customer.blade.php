<!doctype html>
<html lang="en">
  <head>
    <title>Customer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <style>
        .required label::after{
            content: " *";
            color: red;
        }
    </style> -->
  </head>
  <body >
       
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
   

  <div class="container" class="bg-dark">
          <h1 class="text-center">{{$title}}</h1>
          <!-- <form action="{{url('/')}}/customer" method="post"> -->
          <form action="{{$url}}" method="post">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName"  value=>
                        <span class="text-danger">
                          @error('name')
                              {{$message}}
                          @enderror
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value=>
                        <span class="text-danger">
                          @error('email')
                              {{$message}}
                          @enderror
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword" >
                        <span class="text-danger">
                          @error('password')
                              {{$message}}
                          @enderror
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleConfirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" id="exampleConfirmPassPassword>
                        <span class="text-danger">
                          @error('cpassword')
                              {{$message}}
                          @enderror
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputCountry" class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" id="exampleInputCountry"  value=>
                        <span class="text-danger">
                          @error('country')
                              {{$message}}
                          @enderror
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputState" class="form-label">State</label>
                        <input type="text" class="form-control" name="state" id="exampleInputState" value=>
                        <span class="text-danger">
                          @error('state')
                              {{$message}}
                          @enderror
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" value=></textarea>
                        <span class="text-danger">
                          @error('address')
                              {{$message}}
                          @enderror
                        </span>
                    </div>
                </div>
            </div>
              
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label" for="inlineRadio1 inlineRadio2 inlineRadio3">Gender</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="O">
                        <label class="form-check-label" for="inlineRadio3">Others</label>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputDate" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" name="dob" id="exampleInputDate" value="{{old('dob')}}">
                        <span class="text-danger">
                          @error('dob')
                              {{$message}}
                          @enderror
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

          </form>
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>

</html>