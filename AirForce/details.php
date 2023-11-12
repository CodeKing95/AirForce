<?php
  session_start();
  require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container mt-4">

    <?php include('message.php');?>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Passenger Details 
                  <a href="details-create.php" class="btn btn-primary float-end">Add Passenger</a>    
                </h4>
            </div>
            <div class="card-body">

            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Passenger Code</th>
                    <th>Action</th>
                </tr>
          </thead>
          <tbody>
            <?php 
              $query = "SELECT * FROM passenger";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0 )
              {
                foreach($query_run as $passenger)
                {
                  ?>
                  <tr>
                    <td><?= $passenger['id']; ?></td>
                    <td><?= $passenger['first']; ?></td>
                    <td><?= $passenger['last']; ?></td>
                    <td><?= $passenger['country']; ?></td>
                    <td><?= $passenger['city']; ?></td>
                    <td><?= $passenger['email']; ?></td>
                    <td><?= $passenger['phone']; ?></td>
                    <td><?= $passenger['code']; ?></td>
                    <td>
                      <a href="details-view.php?id=<?= $passenger['id']; ?>" class="btn btn-info btn-sm">View</a>
                      <a href="passenger-edit.php?id=<?= $passenger['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                      <form action="code.php" method="POST" class="d-inline">
                      <button type="submit" name="delete_passenger" value="<?=$passenger['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                </form>
                  </td>
                </tr>
                <?php
                }
              }
              else
              {
                echo "<h5> No Record Found </h5>";
              }
            ?>
            <tr>
                <td>1</td>
            </tr>
          </tbody>
      </table>  
        </div>
    </div>
  </div>
</div>
</div>            

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>