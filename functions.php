<?php
// gali but kad reiks check_login($con)
// sita funkcija padaro kad pirmas puslapis butu ne index.php
function checkLogin($con)
{

    if (isset($_SESSION['user_id'])) {

        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {


            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: pirmaspuslapis.php");
    die;
}
function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    return $length > 0 ? substr($haystack, -$length) === $needle : true;
}
