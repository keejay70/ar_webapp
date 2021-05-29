<!DOCTYPE html>
<html>
    <head>
        <title>Admin AR PC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <style>
        body {
            margin-top: 200px;
            background-color: #f3f3f3;
        }
    </style>
    <body> 
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                          <h5 class="card-title">Login</h5>
                          <br />
                          <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                          </form>
                          <div class="text-center">
                          <a href="home.php" type="button" class="btn btn-outline-success">Login</a>
                            <button type="button" class="btn btn-outline-primary">Register</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</html>