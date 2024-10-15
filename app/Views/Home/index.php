<?= $this->extend('layouts/default')?>

<?= $this->section('title')?>Inicio<?= $this->endSection()?>

<?= $this->section('content')?>

    <h1>Bienvenido</h1>

    <a href="<?= site_url("/signup") ?>">Registrate</a>


    <?php if (current_user()): ?>

        <p>Has iniciado sesión</p>

        <p>¡Hola <?= esc(current_user()->name) ?>!</p>

        <a href="<?= site_url("/logout") ?>">Cerrar sesión</a>

    <?php else: ?>

        <p>No has iniciado sesión</p>

        <a href="<?= site_url("/login") ?>">Inicia sesión</a>

    <?php endif; ?>

<?= $this->endSection()?>
