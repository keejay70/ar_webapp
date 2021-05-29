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
        .table {
            width: 80%;
            margin: 30px auto;
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
                    <button type="button" class="btn btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#addModal">Add QR Code</button>

                    <div class="modal" tabindex="-1" id="addModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Login</h5>
                        </div>
                        <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">QR Name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="code" class="form-label">QR code</label>
                                <input type="file" class="custom-file-input" name="qr" id="qr"  required>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                            <div class="mb-3">
                                <label for="addBy" class="form-label">Added By</label>
                                <input type="text" class="form-control" id="addBy">
                            </div>
                        </form>
                            <div class="text-end">
                                <input type="submit" name="submit" class="btn btn-primary">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <br />
                        <table class="table">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Handle</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th>1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                              <a class='btn btn-sm btn-success'>Edit</a>
                              <a class='btn btn-sm btn-danger'>Delete</a>
                            </td>
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
