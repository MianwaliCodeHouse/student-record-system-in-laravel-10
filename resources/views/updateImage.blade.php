<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark">
      <div class="container py-3">
        <div class="h1 text-white">Upload Image onto Server to change Previous Image</div>
      </div>
    </div>
    <div class="container mt-5 d-flex justify-content-between align-items-center">
      <div class="h2">Choose Image to update Image on Server</div>
      <a href="{{ route('image.display') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="container mt-5 row">
      <div class="card col col-md-6 mx-auto mt-5">
        <div class="card-body">
          <form action="{{ route('upload.process') }}" method="post" enctype="multipart/form-data">
          @csrf
          <label for="formFileDisabled" class="form-label">Choose Image From Your Computer</label>
          <input class="form-control" type="file" name="userImage" />
          <input type="number" name='id' value="{{ $id }}" hidden>
          <button class="btn btn-primary mt-4 w-100">Update Image</button>

          </form>
        </div>
      </div>
    </div>
  </body>
</html>