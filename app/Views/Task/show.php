<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Tareas<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title">Tarea</h1>
    
    <a class="button is-link" href="<?= site_url('/task/index') ?>">&laquo; regresar al inicio</a>

    <div class="content">
        <dl>
            <dt class="has-text-weight-bold">Identificador</dt>
            <dd><?= $task->id ?></dd>

            <dt class="has-text-weight-bold">Descripción</dt>
            <dd><?= esc($task->description) ?></dd>

            <dt class="has-text-weight-bold">Creado el </dt>
            <dd><?= $task->created_at->humanize() ?></dd>

            <dt class="has-text-weight-bold">Actualizado el </dt>
            <dd><?= $task->updated_at->humanize() ?></dd>
        </dl>
    </div>

<a class="button is-link" href="<?= site_url('/task/edit/' . $task->id) ?>">Editar</a>
<a class="button is-danger" href="<?= site_url('/task/delete/' . $task->id) ?>">Eliminar</a>

<?= $this->endSection() ?>