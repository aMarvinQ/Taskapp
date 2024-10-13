<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Nuevo<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1>Nueva tarea</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<?= form_open('/task/create') ?>

    <?= $this->include('Task/form') ?>

    <button>Guardar</button>
    <a href="<?= site_url('/task/index') ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>