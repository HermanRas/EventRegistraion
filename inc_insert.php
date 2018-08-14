<?php
    $name = '';
    $surname = '';
    $company = '';
    $tshirt = ''; 
    $email = '';
    $mobile = '';

if ($_POST) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $company = $_POST["company"];
    $tshirt = $_POST["TshirtSize"]; 
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    include_once './connection.php';

    $sql_mins = "INSERT INTO vip_reg ('name','surname','company','tshirt','email','mobile') VALUES ('$name','$surname','$company','$tshirt','$email','$mobile');";
    $conn->query($sql_mins);
   
    //for debugging
    //echo $sql_mins;

    
    echo '<script type="text/javascript">window.location.replace("completed.php");</script>';
}
?>

