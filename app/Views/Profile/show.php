<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Perfil de usuario<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Perfil</h1>

<?php if ($user->profile_image): ?>

    <img src="<?= site_url('/profile/image') ?>" width="200" height="200" alt="profile image">

    <a href="<?= site_url('/profileimage/delete') ?>">Eliminar foto de perfil</a>

<?php else: ?>

    <img src="<?= site_url('/images/blank_profile.jpg') ?>" width="200" height="200" alt="profile image">

<?php endif; ?>

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