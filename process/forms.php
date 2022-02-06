
<?php


if(isset($_POST['namest'])) {

    $name = htmlspecialchars(trim($_POST['namest']), ENT_QUOTES);
    $classAtt = htmlspecialchars(trim($_POST['classattn']), ENT_QUOTES);
    $attn = htmlspecialchars(trim($_POST['attn']), ENT_QUOTES);

    require "../function/functions.php";

    $feedback = storeAttend($name, $classAtt, $attn);

    echo $feedback;
}





?>