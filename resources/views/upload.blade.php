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

      <!-- for uploading file we use (enctype="multipart/form-data") -->
    <form method="post" action="{{url('/upload')}}" enctype="multipart/form-data">
        @csrf
       <div class="container">
           <div class="mb-3">
             <label for="" class="form-label">File</label>
             <input type="file" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId">
             <small id="helpId" class="text-muted">Help text</small>

           </div>
           <button class="btn btn-primary" type="submit">Upload</button>
       </div>
    </form>
  </body>
</html>