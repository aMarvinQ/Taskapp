<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edición<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1>Editar tarea</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<?= form_open('/task/update/' . $task->id) ?>

    <?= $this->include('Task/form') ?>

    <button>Guardar</button>
    <a href="<?= site_url('/task/show/' . $task->id) ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>