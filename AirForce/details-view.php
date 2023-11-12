<?php
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

    <title>Passenger Edit</title>
  </head>
  <body>

    <div class="container mt-5">

        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Passenger View Details
                            <a href="" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        echo $passenger_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM passenger WHERE id='$passenger_id'";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $passenger = mysqli_fetch_array($query_run);
                            ?>
    
                            
                        <div class="mb-3">
                            <label>Passenger First Name:</label>
                            <p class="form-control">
                                <?=$passenger['first'];?>
                            </p>
                         </div>
                         <div class="mb-3">
                            <label>Passenger Last Name:</label>
                            <p class="form-control">
                                <?=$passenger['last'];?>
                            </p>
                         </div>
                         <div class="mb-3">
                            <label>Country:</label>
                            <p class="form-control">
                                <?=$passenger['country'];?>
                            </p>
                         </div>
                         <div class="mb-3">
                            <label>City;</label>
                            <p class="form-control">
                                <?=$passenger['city'];?>
                            </p>
                         </div>
                         <div class="mb-3">
                            <label>Passenger Email:</label>
                            <p class="form-control">
                                <?=$passenger['email'];?>
                            </p>
                         </div>
                         <div class="mb-3">
                            <label>Passenger Phone:</label>
                            <p class="form-control">
                                <?=$passenger['phone'];?>
                            </p>
                         </div>
                         <div class="mb-3">
                            <label>Passenger ID:</label>
                            <p class="form-control">
                                <?=$passenger['code'];?>
                            </p>
                         </div>
                       
                           
                        
                        <?php
                        }
                        else
                        {
                            echo "<h4>No Such Id Found</h4>";
                        }
                    }
                    ?>
                  </div>
            </div>
        </div>
    </div>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>