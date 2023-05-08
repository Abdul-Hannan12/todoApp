<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/todo.css">
    <title>TODO</title>

</head>
<body>
    <form action="api.php" method="POST">
    <button type="submit" name="logout" class="btn btn-danger text-light" style="position: absolute; right: 20px; top: 15px;">Logout</button>
    </form>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card">
                <div class="card-body p-5">
                  <form class="d-flex justify-content-center align-items-center mb-4">
                    <div class="form-outline flex-fill">
                      <input type="text" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-info mx-2">Add</button>
                  </form>
                  <table class="table table-success table-striped">
                    <h3 class="text-center">My List</h3>
                    <br>
                        <tbody>
                        <tr>
                            <td >@mdo</td>
                            <td class="text-end"><span class="delBtn text-danger mx-5">X</span></td>
                        </tr>
                        <tr>
                            <td>@fat</td>
                            <td class="text-end"><span class="delBtn text-danger mx-5">X</span></td>
                        </tr>
                        <tr>
                            <td>@twitter</td>
                            <td class="text-end"><span class="delBtn text-danger mx-5">X</span></td>
                        </tr>
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>