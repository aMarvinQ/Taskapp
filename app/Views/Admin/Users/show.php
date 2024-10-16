<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Usuario<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1>Usuario</h1>
    
    <a href="<?= site_url('/admin/users') ?>">&laquo; regresar al inicio</a>
    <dl>
        <dt>Nombre</dt>
        <dd><?= esc($user->name) ?></dd>

        <dt>Correo Electrónico</dt>
        <dd><?= esc($user->email) ?></dd>

        <dt>Creado el </dt>
        <dd><?= $user->created_at ?></dd>

        <dt>Actualizado el </dt>
        <dd><?= $user->updated_at ?></dd>
    </dl>

<a href="<?= site_url('/admin/users/edit/' . $user->id) ?>">Editar</a>
<a href="<?= site_url('/admin/users/delete/' . $user->id) ?>">Eliminar</a>

<?= $this->endSection() ?>