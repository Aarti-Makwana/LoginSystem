<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-2">
        <h1>Signin</h1>
        <form method="POST" action="registration.php">
  <div class="mb-3">
    <label for="names" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="names" aria-describedby="emailHelp">
 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text">Signin here.</div>
  </div>

  <button type="submit" class="btn btn-primary">Signin</button>
</form>
    </div>
    <div class="container my-4">
        <h1>Login</h1>
        <form method="POST" action="validation.php">
  <div class="mb-3">
    <label for="names" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="names" aria-describedby="emailHelp">
 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text">Signin Before Login.</div>
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>