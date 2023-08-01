<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>


    <div class="bg-dark">
      <div class="container py-3">
        <div class="h1 text-white">CRUD App with Image/file Data</div>
      </div>
    </div>
    <div class="container mt-5 d-flex justify-content-between align-items-center">
      <div class="h2">All Uploaded Images</div>
      <a href="{{ route('image.choose') }}" class="btn btn-primary">Add Image</a>
    </div>

    <div class="container mt-5 mb-5">
      <div class="card mx-auto mt-5 mb-5">
        <div class="card-body d-flex justify-content-between flex-wrap gap-4 mb-5">
          @foreach ($images as $image )
          <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/'.$image['userImage'])}}" class="card-img-top w-100" alt="...">
            <div class="card-body">
              <a href="{{ route('image.update',$image['id']) }}" class="btn btn-primary mx-auto d-block mb-3">Update</a>
              <a href="{{ route('image.delete',$image['id']) }}" class="btn btn-primary mx-auto d-block">Delete</a>
            </div>
          </div>
            
          @endforeach
        </div>
      </div>
    </div>
  </body>
</html>