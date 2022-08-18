<?php
session_start();
require   'dbcon.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>


  <div class="container mt-5">

    <?php include('message.php'); ?>
    
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Studant Details
              <a href="student-create.php" class="btn btn-primary float-end">Add Student</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Course</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT * FROM students";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $student) {
                ?>
                    <tr>
                      <td><?= $student['id'] ?></td>
                      <td><?= $student['name'] ?></td>
                      <td><?= $student['email'] ?></td>
                      <td><?= $student['phone'] ?></td>
                      <td><?= $student['course'] ?></td>
                      <td>
                        <a href="" class="btn btn-info btn-sm">View</a>
                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                <?php
                  }
                } else {
                  echo "<h5> No Record Found </h5>";
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>