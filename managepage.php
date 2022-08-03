<?php
session_start();

include("conection.php");
include("functions.php");


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
                <div class="logo">
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
            <?php
            $query = 'select * from allservice';
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($result)) {

            ?>
                <div class="main1">Details</div>
                <div><strong>Product/Service:</strong> <?php echo $row['service_name'] ?>
                </div>
                <div><strong>Label:</strong> none
                </div>
                <div><strong>Node:</strong> <?php echo $row['Node'] ?>
                </div>
                <div><strong>Specs:</strong> <?php echo $row['specs'] ?>
                </div>
                <div><strong>Components:</strong> <?php echo $row['components'] ?>
                </div>
                <div><strong>Bacups:</strong> <a href="#">Order Now</a>
                </div>
                <div><strong>IP(s):</strong> <?php echo $row['IP(s)'] ?>
                </div>


            <?php } ?>
        </div>


    </div>
</body>

</html>