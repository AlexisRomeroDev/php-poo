<?php

require './UploadedFile.php';

$uploadedFile = new UploadedFile($_FILES);
try {
    $uploadedFile->save('avatar');

} catch (Exception $exception) {
    // echo $exception->getMessage();
    echo "Je n’ai pas pu uploader votre avatar. Ressayez !";
}

$count = $uploadedFile->getValue();
var_dump($count);

?>

<html>

<body>

liste des images :

<?php

$rep = opendir("uploads/");

while ($lect = readdir($rep)) {

    if ($lect != '.' && $lect != '..') {

        $url_img = "uploads/$lect";

        echo "<div><img src=\"$url_img\" height='100'></div>";

    }

}
?>

Vous avez uploadé : <?= $count; ?> images

</body>

</html>

