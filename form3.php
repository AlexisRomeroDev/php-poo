<?php
require './Form.php';

$form = new Form();
?>

<form action="upload3.php" method="POST" enctype="multipart/form-data">
    <p>
        <label>Entrez votre prénom</label>
        <?php echo $form->input('prenom','text');?>
    </p>
    <p>
        <label>Entrez votre âge</label>
        <?php echo $form->input('prenom','text');?>
    </p>
    <p>
        <label>Ajoutez votre avatar</label>
        <?php echo $form->input('avatar','file');?>
     </p>
    <p>
        <input type="submit" value="valider"/>
    </p>
</form>
