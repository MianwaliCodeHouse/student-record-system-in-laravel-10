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
        <div class="h1 text-white">CRUD App With Text Data</div>
      </div>
    </div>
    <div class="container mt-5 d-flex justify-content-between align-items-center">
      <div class="h2">All Records</div>
      <a href="{{ route('data.insert.form') }}" class="btn btn-primary">Add Record</a>
    </div>
    <div class="container mt-4">
      <form action="">
        <div class="row">
      <div class="col">
        <input type="text" name="search" placeholder="Enter ID or Name" class="form-control" value="{{ $search }}">
      </div>
      <div class="col">
        <button class="btn btn-primary">Search</button>
        
      </div>
    </div>
    </form>
    <div class="mt-3">
    <a href="{{ route('data.display') }}">
      <button class="btn btn-primary">Reset</button>
    </a>
  </div>
    </div>
    <div class="container mt-5">
      <div class="card">
        <div class="card-body">
         <table class="table table-stripped table-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Program</th>
            <th>Actions</th>
          </tr>
          @foreach ($students as $student)
          <tr valign='middle'>
            <td>{{ $student['id_number'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['program'] }}</td>
            <td>
              <a href="{{ route('data.edit.form',$student['id']) }}" class="btn btn-success">Edit</a>
              <a href="{{ route('data.delete',$student['id']) }}" class="btn btn-danger">Delete</a>
          </tr>
          @endforeach
          
         </table>
        </div>
      </div>
    </div>
  </body>
</html>