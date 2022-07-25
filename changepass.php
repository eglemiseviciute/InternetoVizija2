<?php

include ("conection.php");
include ("functions.php");

if(!empty($_POST['save'])){


// username reik chekint
$oldpass = $_POST['oldpass'];
$newpass = $_POST['newpassword'];
$cnewpass = $_POST['connewpassword'];

if($newpass == $cnewpass){
// username reik chekint su passwordu jei daugiau nei vienas
    $query = "select * from users where password = '$oldpass'";
$result = mysqli_query($con , $query);
$count = mysqli_num_rows($result);

if($count > 0){

$query = "update users set password = '$newpass'";
mysqli_query($con , $query);
echo "password updated";


}else{
    echo "old pass dont match";
}



}else{

echo "New pass and Confirm pass do not match";

}


}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Document</title>
</head>
<body>
<header>
    <section class="navbar">
        <div class="container">
            <div class="logo" >
<h1>InternetoVizija</h1>
            </div>
            <div class="menu ">
                <ul>
                <li>
                    <a href="index.php">Dashborad</a>
                    </li>
                    <li>
                        <a href="pirmaspuslapis.php">Logout</a>
                    </li>
                    
                </ul>
            </div>
            
        </div>
    </section>
    </header>
    <div class="my">

<div class="side">
    <div class="side1">Menu</div>
    <div><a href="manage.php">Services Details</a></div>
<div><a href="change.php">Change Password</a></div>
<div><a href="changehost.php">Change HostName</a></div>

</div>

<div class="main">
<div class="main1">Details</div>
    <div class="form">
            
            <div class="login">
            <h3>Change Password</h3>
            <form method="post">
                <div class="form-group">
                    <label>Old Password</label>
                    <input id="text" type="text" name="oldpass">
            
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input id= "text "type="password" name="newpassword" >
            
                </div>
                <div class="form-group">
                    <label>Confrim New Password</label>
                    <input id= "text "type="password" name="connewpassword" >
            
                </div>
                <button type="submit" name = "save" value="Save" >Change</button>
                
            </form>
            </div>
            </div>
</div>
    </div>

</body>
</html>