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
        <div class="h1 text-white">Insert Data into DataBase</div>
      </div>
    </div>
    <div class="container mt-5 d-flex justify-content-between align-items-center">
      <div class="h2">Create Records</div>
      <a href="{{ route('data.display') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="container mt-5">
      <div class="card">
        <div class="h1 text-center mt-2">Student Record Form</div>
        <div class="card-body">
          <form action="{{ route('data.insert') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Enter Student name" class="form-control mb-4">
            <input type="text" name="id_number" placeholder="Enter Student roll number" class="form-control mb-4">
            <input type="text" name="program" placeholder="Enter Student program" class="form-control mb-4">
            <button class="btn btn-primary btn-lg">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>