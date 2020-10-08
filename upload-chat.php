<?php

    require './UploadedFile.php';

    $uploadedFile = new UploadedFile($_FILES);
    $uploadedFile->save('chat');
    $count = $uploadedFile->getValue();

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

    Vous avez uploadé : <?=$count;?> images

</body>

</html>

