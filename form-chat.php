<?php
require './Form.php';

$form = new Form();
?>

<form action="upload-chat.php" method="POST" enctype="multipart/form-data">
    <p>
        <label>Postez la photo de votre chat</label>
        <?php echo $form->input('chat','file');?>
     </p>
    <p>
        <input type="submit" value="valider"/>
    </p>
</form>
