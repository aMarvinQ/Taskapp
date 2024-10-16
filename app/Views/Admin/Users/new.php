<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Nuevo<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1>Nuevo Usuario</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<?= form_open('/admin/Users/create') ?>

    <?= $this->include('Admin/Users/form') ?>

    <button>Guardar</button>
    <a href="<?= site_url('/admin/users') ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>