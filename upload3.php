<?php

    require './UploadedFile.php';

    $uploadedFile = new UploadedFile($_FILES);
    $uploadedFile->save();

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

