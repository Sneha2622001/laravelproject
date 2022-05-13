<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
       
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        @if(session()->has('name'))
            {{session()->get('name')}}
        @else
           GUEST
        @endif
    </a>
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
      <div class="row m-2">
          <form action="" class = "col-9" method= "get">
           <div class="form-group">
              <input type="search" name="search" id="search" class="form-control" placeholder="Search by name or email">
             
           </div>
           
           <button class = "btn btn-primary" type="submit">Search</button>
           <a href="{{url('/customer/view')}}">
             <button class = "btn btn-primary" type="button">Reset</button>
           </a>
          </form>
          
          <div class="col-3">
                <a href="{{route('customer.index')}}">
                    <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
                </a>

                <a href="{{url('customer/trash')}}">
                    <button class="btn btn-danger d-inline-block m-2 float-right">Go to trash</button>
                </a>
          </div>
     </div>    
      <table class="table">
          <!-- <pre>
              {{print_r($customers)}}
          </pre> -->
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Gender</th>
                  <th>DOB</th>
                  <th>State</th>
                  <th>Address</th>
                  <th>Country</th>
                  <th>Status</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($customers as $customer)
              <tr>
               
                  <td>{{$customer->name}}</td>
                  <td>{{$customer->email}}</td>
                  <td>
                       @if ($customer->gender == "M")
                       Male
                       @elseif($customer->gender == "F")
                       Female
                       @else
                       Other
                       @endif
                    </td>
                  </td>
                  <!-- <td>{{get_formatted_date( $customer->dob , "d-M-Y")}}</td> -->
                  <td>{{$customer->dob}}</td>
                  <td>{{$customer->state}}</td>
                  <td>{{$customer->address}}</td>
                  <td>{{$customer->country}}</td>
                  <td>
                       @if ($customer->status == "1")
                      <a href="">
                         <span class="badge bg-success"> Active</span>
                         </a>
                       @else
                    <a href="">
                     <span class="badge bg-danger">Inactive</span>
                     </a>
                       @endif
                    </td>
                    <td>
                        <!-- <a href="{{('/customer/delete')}}/{{$customer->customer_id}}">
                           <button class="btn btn-danger">Delete</button>
                        </a> -->

                        <a href="{{route('customer.delete' , ['id'=> $customer->customer_id])}}">
                           <button class="btn btn-danger">Trash</button>
                        </a>
                        <a href="{{route('customer.edit' , ['id'=> $customer->customer_id])}}">
                           <button class="btn btn-primary">Edit</button>
                        </a>
                    </td>
              </tr>
                   
              @endforeach
          </tbody>
      </table>
      <!-- pagination -->
      <div class="row">
          {{ $customers->links() }}
      </div>
  </div>
   
  </body>
</html>