<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body style="display: flex; align-items: center; height: 100vh; background-color: #0000ff">
    <div class="container">
      <div class="row">
        <div class="offset-md-3 col-md-6">
          @if (session('pesan'))
          <div class="alert alert-danger" role="alert">
            {{ session('pesan') }}
          </div>
          @endif
          @if (session('daftar'))
          <div class="alert alert-success" role="alert">
            {{ session('daftar') }}
          </div>
          @endif
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Login Form</h3>
            </div>
            <div class="card-body">
              <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input required type="text" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input required type="password" class="form-control" name="password" id="password">
                </div>
                <div class="d-flex" style="justify-content: space-between; align-items:center">
                  <button class="btn btn-primary" type="submit">Login</button>  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>