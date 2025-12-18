<?php 
include('config.php');
if(isset($_POST['sadv']))
{
    $name = $_POST['nadv'];
    $query = mysqli_query($con,"INSERT INTO `Adversaries`(`name`) VALUES ('$name')");
    if($query)
    {
        header("Location: view_adversaries.php");
    }
    else{
        echo "failed";
    }
}
//Updating Adversaries
if(isset($_POST['upadv']))
{
    $id = $_POST['id'];
    $name = $_POST['uadv'];
    $query = mysqli_query($con,"UPDATE `Adversaries` SET `name`='$name' WHERE `ad_id` ='$id'");
    if($query)
    {
        header("Location: view_adversaries.php");
    }
    else{
        echo "Data is not updated there is error please check";
    }
}
if(isset($_POST['delbtn']))
{
    $id=$_POST['id'];
    $query = mysqli_query($con,"DELETE FROM `Adversaries` WHERE ad_id = '$id'");
    if($query)
    {
        header("Location: view_adversaries.php");
    }
    else{
        echo "data is not deleted";
    }
}
// updating Referees
if(isset($_POST['sarefer']))
{
    $fname = $_POST['fname'];
    $laname = $_POST['laname'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $phone = $_POST['phone'];
    $query = mysqli_query($con,"INSERT INTO `Referees`( `f_name`, `l_name`, `age`, `sex`, `telephone`) VALUES ('$fname','$laname','$age','$sex','$phone')");
    if($query)
    {
        echo "Data is Insteted";
    }
    else{
        echo "Data is not insterted";
    }
}
if(isset($_POST['uprefere']))
{   $id = $_POST['id'];
    $fname = $_POST['fname'];
    $laname = $_POST['lname'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $phone = $_POST['phone'];
    $query = mysqli_query($con,"UPDATE `Referees` SET `f_name`='$fname',`l_name`='$laname',`age`='$age',`sex`='$sex',`telephone`='$phone' WHERE ref_id='$id'");
    if($query)
    {
        header("Location: view_referees.php");
    }
    else{
        echo "data is not updated";
    }
}
if(isset($_POST['delref']))
{
    $id = $_POST['id'];
    $query = mysqli_query($con,"DELETE FROM `Referees` WHERE ref_id = '$id'");
    if($query)
    {
        header("Location: view_referees.php");
    }
    else{
        echo "data is not Deleted";
    }
}
// Inserting Matchces
if(isset($_POST['samatc']))
{
    $ref = $_POST['refid'];
    $ad = $_POST['adva'];
    $date = $_POST['date'];
    $plyground = $_POST['play'];
    $query = mysqli_query($con,"INSERT INTO `Matches`( `Date`, `play_ground`, `ref_id`, `ad_id`) VALUES ('$date','$plyground','$ref','$ad')");
    if($query)
    {
        echo "data inserted sucsee";
    }
    else{
        echo "data is not insterted";
    }
}
?>
