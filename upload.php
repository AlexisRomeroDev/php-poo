<?php

echo "test";

var_dump($_REQUEST);
var_dump($_FILES);

$upFile = "uploads/".date("Y_m_d_H_i_s").$_FILES["avatar"]["name"];

if(is_uploaded_file($_FILES["avatar"]["tmp_name"])) {

    move_uploaded_file($_FILES["avatar"]["tmp_name"], $upFile);
}

// Ajout de cookie
if(isset($_COOKIE['upload'])){
    $n = $_COOKIE['upload'];
}else{
    $n=0;
}

$n = $n+1;

setcookie('upload',$n);

?>

<html>

<body>

    liste des images :

    <?php

    $rep=opendir("uploads/");

    while ($lect=readdir($rep)){

        if($lect != '.' && $lect != '..') {

            $url_img = "uploads/$lect";

            echo "<div><img src=\"$url_img\" height='100'></div>";

        }

    }
    ?>

    Vous avez uploadé : <?=$n;?> images

</body>

</html>

