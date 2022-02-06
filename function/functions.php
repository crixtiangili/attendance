

<?php


function storeAttend($name, $classAtt, $attn) {

    require "../database/connect.php";

    $nameEntry = mysqli_real_escape_string($conn, $name);
    $classEntry = mysqli_real_escape_string($conn, $classAtt);
    $attnEntry = mysqli_real_escape_string($conn, $attn);

    $user_register = "INSERT INTO `attend` (`name`, `class`, `status`) VALUES ('$nameEntry', '$classEntry', '$attnEntry')";

    $user_result = mysqli_query($conn, $user_register);

    if($user_result) {

        echo "Added";

    } else {

        mysqli_error($conn);

    }
}






?>