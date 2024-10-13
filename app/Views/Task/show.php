<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Tareas<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1>Tarea</h1>
    
    <a href="<?= site_url('/task/index') ?>">&laquo; regresar al inicio</a>
    <dl>
        <dt>ID</dt>
        <dd><?= $task->id ?></dd>
    
        <dt>Descripción</dt>
        <dd><?= esc($task->description) ?></dd>

        <dt>Creado el </dt>
        <dd><?= $task->created_at ?></dd>

        <dt>Actualizado el </dt>
        <dd><?= $task->updated_at ?></dd>
    </dl>

<a href="<?= site_url('/task/edit/' . $task->id) ?>">Editar</a>
<a href="<?= site_url('/task/delete/' . $task->id) ?>">Eliminar</a>

<?= $this->endSection() ?>