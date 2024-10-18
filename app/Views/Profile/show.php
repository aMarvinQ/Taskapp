<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Perfil de usuario<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Perfil</h1>

<?php if ($user->profile_image): ?>

    <img src="<?= site_url('/profile/image') ?>" width="200" height="200" alt="profile image">

    <div>
        <a class="button is-danger" href="<?= site_url('/profileimage/delete') ?>">Eliminar foto de perfil</a>
    </div>

<?php else: ?>

    <img src="<?= site_url('/images/blank_profile.jpg') ?>" width="200" height="200" alt="profile image">

<?php endif; ?>

<div class="content">
    <dl>
        <dt class="has-text-weight-bold">Nombre</dt>
        <dd><?= esc($user->name) ?></dd>

        <dt class="has-text-weight-bold">Correo electrónico</dt>
        <dd><?= esc($user->email) ?></dd>
    </dl>
</div>

<a class="button is-link" href="<?= site_url("/profile/edit") ?>">Editar</a>

<a class="button is-link" href="<?= site_url("/profile/editpassword") ?>">Cambiar contraseña</a>

<a class="button is-link" href="<?= site_url("/profileimage/edit") ?>">Cambiar foto de perfil</a>

<?= $this->endSection() ?>