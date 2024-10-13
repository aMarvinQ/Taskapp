<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Eliminar<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Eliminar tarea</h1>

<p>¿Está seguro?</p>

<?= form_open("/task/delete/" . $task->id) ?>

    <button>Aceptar</button>
    <a href="<?= site_url('/task/show/' . $task->id) ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>