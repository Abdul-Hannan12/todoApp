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
    <button type="submit" name="logout" onclick="logout()" class="btn btn-danger text-light" style="position: absolute; right: 20px; top: 15px;">Logout</button>
    </form>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card">
                <div class="card-body p-5">
                  <form method="POST" action="api.php" class="d-flex justify-content-center align-items-center mb-4">
                    <input type="hidden" name="MODE" value="add">
                    <div class="form-outline flex-fill">
                      <input type="text" name="text" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-info mx-2">Add</button>
                  </form>
                  <table class="table table-success table-striped">
                    <h3 class="text-center">My List</h3>
                    <br>
                        <tbody>
                        <?php
                          session_start();
                          $conn = new mysqli("localhost","root","","todo");
                          $uid = $_SESSION['user_id'];
                          $sql = "SELECT * FROM todos WHERE uid='$uid'";
                          $result = mysqli_query($conn, $sql);
                          if(mysqli_num_rows($result) <= 0){
                            echo '<h4> Nothing to show here </h4>';
                          }else{
                            foreach($result as $todo){
                        ?>
                        <tr>
                            <td > <?php echo $todo['content']; ?></td>
                            <td class="text-end"><span class="delBtn text-danger mx-5">X</span></td>
                        </tr>
                        <?php
                            }
                          }
                        ?>
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