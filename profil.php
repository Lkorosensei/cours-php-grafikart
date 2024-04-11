<?php
require 'elements/header.php';
?>

<?php if ($nom) : ?>
    <h1> Bonjour <?= htmlentities($nom) ?> </h1>
    <a href="profil.php?action=deconnecter"> Se déconnecter </a>
<?php else : ?>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="nom" placeholder="">
        </div>
        <button class="btn btn-primary">Se connecter</button>
    </form>
<?php endif; ?>

<?php require 'elements/footer.php'; ?>