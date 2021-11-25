<h1 class="my-3">Se connecter</h1>
<?php if (isset($_SESSION['errors'])): ?>

<?php foreach($_SESSION['errors'] as $errorsArray): ?>
    <?php foreach($errorsArray as $errors): ?>
        <div class="alert alert-danger">
            <?php foreach($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach ?>
        </div>
    <?php endforeach ?>
<?php endforeach ?>

<?php endif ?>

<?php session_destroy(); ?>

<form action="login.html" method="POST">
    <div class="form-group my-4">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" class="form-control" name="username" id="username">
    </div>
    <div class="form-group my-4">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>

    <button type="submit" class="btn btn-primary my-3">Connexion</button>
</form>