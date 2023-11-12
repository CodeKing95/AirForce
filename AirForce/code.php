<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_passenger']))
{
    $passenger_id = mysqli_real_escape_string($con, $_POST['delete_passenger']);

    $query = "DELETE FROM passenger WHERE id='$passenger_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        
        $_SESSION['message'] = "Passenger Deleted Successfully";
        header("Location: details.php");
        exit(0);

    }
    else
    {
        
        $_SESSION['message'] = "Passenger Not Deleted";
        header("Location: details.php");
        exit(0);

    }
}



if(isset($_POST['update_passenger']))
{
    $passenger_id = mysqli_real_escape_string($con, $_POST['passenger_id']);

    $first = mysqli_real_escape_string($con, $_POST['first']);
    $last = mysqli_real_escape_string($con, $_POST['last']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $code = mysqli_real_escape_string($con, $_POST['code']);

    $query = "UPDATE passenger SET first='$first', last='$last', country='$country' , city='$city', email='$email', phone='$phone', code='$code' 
                WHERE id='$passenger_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Passenger Updated Successfully";
        header("Location: details.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Passenger Not Updated";
        header("Location: details.php");
        exit(0);
    }


}


if(isset($_POST['save_passenger']))
{
    $first = mysqli_real_escape_string($con, $_POST['first']);
    $last = mysqli_real_escape_string($con, $_POST['last']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $code = mysqli_real_escape_string($con, $_POST['code']);

    $query = "INSERT INTO passenger (first,last,country,city,email,phone,code) VALUES
     ('$first','$last','$country','$city','$email','$phone','$code')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {   
        $_SESSION['message'] = "Passenger Details Created Successfully";
        header("Location: details-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Passenger Details Not Created";
        header("Location: details-create.php");
    }

}

?>