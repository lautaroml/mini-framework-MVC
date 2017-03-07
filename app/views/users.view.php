<?php require('partials/head.php'); ?>

    <h1>Todos los usuarios</h1>

<?php foreach ($users as $user) : ?>
    <li><?= $user->username; ?></li>
<?php endforeach; ?>

<h1>Agregar un nuevo usuario</h1>

<form method="POST" action="/users">
    <input name="username"></input>
    <button type="submit">Confirmar</button>
</form>

<?php require('partials/footer.php'); ?>
