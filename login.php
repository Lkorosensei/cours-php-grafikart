<?php
$erreur = null;
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'John' && $_POST['motdepasse' === "Doe"]) {
        # code...
    } else {
        $erreur = "Identifiants incorrects";
    }
}

require 'elements/header.php';
?>

<?php if ($erreur): ?>

<?php endif; ?>

<form action="" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="pseudo" placeholder="Nom d'utilisateur">
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="motdepasse" placeholder="Votre mot de passe">
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>


<?php require 'elements/footer.php'; ?>