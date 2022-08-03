<?php

include("conection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //SOMETHING WAS POSTED

    $oldhost = $_POST['oldhost'];
    $newhost = $_POST['newhost'];



    if (endsWith($newhost, '.r.times4.kal')) {


        $query = "update allservice set hostname = '$newhost'";


        mysqli_query($con, $query);


        echo "hostname change sucsesfully!";
        header("Location: manage.php");
        die;
    } else {
        echo "please enter some valid information!";
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
                <div class="form">

                    <div class="login">
                        <!-- cia pasirinksim hostname is allservices -->
                        <h3>Change HostName</h3>
                        <form method="post">
                            <div class="form-group">
                                <label> Currently HostName:
                                    <strong><?php echo $row['hostname'] ?></strong>
                                </label>
                                <input hidden id="text" type="text" name="oldhost">

                            </div>
                            <div class="form-group">
                                <!-- cia padarysim new hoostname -->
                                <label>New HostName</label>
                                <input id="text " type="text" name="newhost">

                            </div>
                            <button type="submit" name="save" value="Save">Change</button>

                        </form>
                    </div>
                <?php } ?>
                </div>
        </div>
</body>

</html>