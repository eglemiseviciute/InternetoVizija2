<?php 
session_start();

include ("conection.php");
include ("functions.php");

$user_data = checkLogin($con);

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
                        <a href="pirmaspuslapis.php">Logout</a>
                    </li>
                    
                </ul>
            </div>
            
        </div>
    </section>
    </header>


<div class="dash">Dashborad</div>




    <div class="box">
            

            <h5>Invoice </h5>
<h5>Support </h5>
<h5>Balance </h5>
<h5>Refferal Bonus </h5>
        
    </div>

<div class="dash1">Service </div>
<?php
$query = 'select * from allservice';
$result = mysqli_query($con , $query) ;
while($row = mysqli_fetch_assoc($result ))
{

?>




<div class="lentele">
<h3>Service</h3>
<h3>Status</h3>
<h3>Price</h3>
<h3>Billing Cycle</h3>
<h3>Next Due Date</h3>
<h3>Action</h3>
</div>
<div class="tarpelis"></div>
<div class="isdata">

<h4><?php echo $row['service_name'] ?><br> 
<?php echo $row['hostname'] ?>
</h4>
<h4 class="myg">Active</h4>
<h4><?php echo $row['price'] ?></h4>
<h4><?php echo $row['billing'] ?></h4>
<h4>2000-10-25</h3>
<h4><a href="manage.php">Manage</a></h4>

</div>



<?php }?>




    
</body>
</html>