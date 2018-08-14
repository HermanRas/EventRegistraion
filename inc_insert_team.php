<?php
    $team = '';
    $name = array();
    $surname = array();
    $company = array();
    $tshirt = array();
    $email = array();
    $mobile = array();


if ($_POST) {
    
    $team = $_POST["TeamName"];
     
    //p0
    $name[0] = $_POST["name"][0];
    $surname[0] = $_POST["surname"][0];
    $company[0] = $_POST["company"][0];
    $tshirt[0] = $_POST["TshirtSize"][0]; 
    $email[0] = $_POST["email"][0];
    $mobile[0] = $_POST["mobile"][0];
    //p1
    $name[1] = $_POST["name"][1];
    $surname[1] = $_POST["surname"][1];
    $company[1] = $_POST["company"][1];
    $tshirt[1] = $_POST["TshirtSize"][1]; 
    $email[1] = $_POST["email"][1];
    $mobile[1] = $_POST["mobile"][1];
    //p2
    $name[2] = $_POST["name"][2];
    $surname[2] = $_POST["surname"][2];
    $company[2] = $_POST["company"][2];
    $tshirt[2] = $_POST["TshirtSize"][2]; 
    $email[2] = $_POST["email"][2];
    $mobile[2] = $_POST["mobile"][2];
    //p3
    $name[3] = $_POST["name"][3];
    $surname[3] = $_POST["surname"][3];
    $company[3] = $_POST["company"][3];
    $tshirt[3] = $_POST["TshirtSize"][3]; 
    $email[3] = $_POST["email"][3];
    $mobile[3] = $_POST["mobile"][3];

    include_once './connection.php';

    $into =   "'Teamname',"
            . "'p1name',"
            . "'p1surname',"
            . "'p1comany',"
            . "'p1tshirt',"
            . "'p1email',"
            . "'p1mobile',"
            . "'p2name',"
            . "'p2surname',"
            . "'p2comany',"
            . "'p2tshirt',"
            . "'p2email',"
            . "'p2mobile',"
            . "'p3name',"
            . "'p3surname',"
            . "'p3comany',"
            . "'p3tshirt',"
            . "'p3email',"
            . "'p3mobile',"
            . "'p4name',"
            . "'p4surname',"
            . "'p4comany',"
            . "'p4tshirt',"
            . "'p4email',"
            . "'p4mobile'";
    
    $values = "'$team',"
            //P1
            . "'$name[0]',"
            . "'$surname[0]',"
            . "'$company[0]',"
            . "'$tshirt[0]',"
            . "'$email[0]',"
            . "'$mobile[0]',"
            //P2
            . "'$name[1]',"
            . "'$surname[1]',"
            . "'$company[1]',"
            . "'$tshirt[1]',"
            . "'$email[1]',"
            . "'$mobile[1]',"
            //P3
            . "'$name[2]',"
            . "'$surname[2]',"
            . "'$company[2]',"
            . "'$tshirt[2]',"
            . "'$email[2]',"
            . "'$mobile[2]',"
            //P4
            . "'$name[3]',"
            . "'$surname[3]',"
            . "'$company[3]',"
            . "'$tshirt[3]',"
            . "'$email[3]',"
            . "'$mobile[3]'";

    
    
    $sql_mins = "INSERT INTO team_reg ($into) VALUES ($values);";
    $conn->query($sql_mins);
   
    //for debugging
    //echo $sql_mins;

    echo "<script type='text/javascript'>window.location.replace('completed_team.php?team=$team');</script>";
}
?>

