<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Restablecer contraseña<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Restablece tu contraseña</h1>

<p>Contraseña restablecida exitosamente</p>

<p><a href="<?= site_url("/login") ?>">Inicia Sesión</a></p>

<?= $this->endSection() ?>