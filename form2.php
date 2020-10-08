<form action="upload.php" method="POST" enctype="multipart/form-data">
    <p>
        <label>Entrez votre prénom</label>
        <input type="text" name="prénom"/>
    </p>
    <p>
        <label>Entrez votre âge</label>
        <input type="number" name="age"/>
    </p>
    <p>
        <label>Ajoutez votre avatar</label>
        <input type="file" name="avatar"/>
    </p>
    <p>
        <input type="submit" value="valider"/>
    </p>
</form>
