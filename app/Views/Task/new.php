<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Nuevo<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1 class="title">Nueva tarea</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<div class="container">
    <?= form_open('/task/create') ?>
    
    <div class="field">
        <?= $this->include('Task/form') ?>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary">Guardar</button>
        </div>

        <div class="control">
            <a class="button" href="<?= site_url('/task/index') ?>">Cancelar</a>
        </div>
    </div>

    </form>
</div>

<?= $this->endSection() ?>