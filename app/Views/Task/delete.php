<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Eliminar<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Eliminar tarea</h1>

<div class="container">
    <div class="field">
        <p>¿Está seguro?</p>
    </div>

    <?= form_open("/task/delete/" . $task->id) ?>

    <div class="field is-grouped">
        <button class="button is-primary">Aceptar</button>
        <a class="button" href="<?= site_url('/task/show/' . $task->id) ?>">Cancelar</a>
    </div>

    </form>
</div>

<?= $this->endSection() ?>