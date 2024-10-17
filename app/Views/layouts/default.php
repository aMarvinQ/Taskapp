<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
</head>
<body>

    <a href="<?= site_url("/") ?>">Inicio</a>

    <?php if (current_user()): ?>

        <p>¡Hola <?= esc(current_user()->name) ?>!</p>

        <a href="<?= site_url("/profile/show") ?>">Perfil</a>

        <?php if (current_user()->is_admin): ?>
                <a href="<?= site_url("/admin/users") ?>">Usuarios</a>
        <?php endif; ?>

        <a href="<?= site_url("/task") ?>">Tareas</a>

        <a href="<?= site_url("/logout") ?>">Cerrar sesión</a>

    <?php else: ?>

        <a href="<?= site_url("/signup") ?>">Registrate</a>

        <a href="<?= site_url("/login") ?>">Inicia sesión</a>

    <?php endif; ?>

    <?php if(session()->has('warning')): ?>
        <div class="warning">
            <?= session('warning') ?>
        </div>
    <?php endif ?>

    <?php if(session()->has('info')): ?>
        <div class="info">
            <?= session('info') ?>
        </div>
    <?php endif ?>

    <?php if(session()->has('error')): ?>
        <div class="error">
            <?= session('error') ?>
        </div>
    <?php endif ?>

    <?= $this->renderSection('content')?>

</body>
</html>