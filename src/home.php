<!DOCTYPE html>
<html>
    <head>
        <title>Admin AR PC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <style>
        body {
            background-color: #f3f3f3;
        }
        nav {
            margin-bottom: 40px;
        }
    </style>
    <body> 
    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">AR PC Builder</span>
        <a href="index.php" class="float-end btn btn-danger">Logout</a>
    </div>
    </nav>

        <div class="container">
            <div class="row">
                <!-- <div class="col-md-4"> -->
                <div class="card">
                    <div class="card-header">
                        Table Lists
                    </div>
                    <div class="card-body">
                    <button type="button" class="btn btn-outline-primary float-end">Add QR Code</button>
                    <br />
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</html>