<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Usuario<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title">Usuario</h1>
    
    <a class="button is-link" href="<?= site_url('/admin/users') ?>">&laquo; regresar al inicio</a>

    <div class="content">
        <dl>
            <dt class="has-text-weight-bold">Nombre</dt>
            <dd><?= esc($user->name) ?></dd>

            <dt class="has-text-weight-bold">Correo Electrónico</dt>
            <dd><?= esc($user->email) ?></dd>

            <dt class="has-text-weight-bold">Activo</dt>
            <dd><?= $user->is_active ? 'Si' : 'No' ?></dd>

            <dt class="has-text-weight-bold">Administrador</dt>
            <dd><?= $user->is_admin ? 'Si' : 'No' ?></dd>

            <dt class="has-text-weight-bold">Creado el </dt>
            <dd><?= $user->created_at->humanize() ?></dd>

            <dt class="has-text-weight-bold">Actualizado el </dt>
            <dd><?= $user->updated_at->humanize() ?></dd>
        </dl>
    </div>

<a class="button is-link" href="<?= site_url('/admin/users/edit/' . $user->id) ?>">Editar</a>

<?php if ($user->id != current_user()->id): ?>

    <a class="button is-danger" href="<?= site_url('/admin/users/delete/' . $user->id) ?>">Eliminar</a>

<?php endif; ?>

<?= $this->endSection() ?>