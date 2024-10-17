<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Perfil de usuario<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Perfil</h1>

<dl>
    <dt>Nombre</dt>
    <dd><?= esc($user->name) ?></dd>

    <dt>Correo electrónico</dt>
    <dd><?= esc($user->email) ?></dd>
</dl>

<a href="<?= site_url("/profile/edit") ?>">Editar</a>

<a href="<?= site_url("/profile/editpassword") ?>">Cambiar contraseña</a>

<a href="<?= site_url("/profileimage/edit") ?>">Cambiar foto de perfil</a>

<?= $this->endSection() ?>