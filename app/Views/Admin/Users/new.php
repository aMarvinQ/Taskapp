<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Nuevo<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1 class="title">Nuevo Usuario</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<div class="container">
    <?= form_open('/admin/Users/create') ?>
        <div class="field">
            <?= $this->include('Admin/Users/form') ?>
        </div>
        
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary">Guardar</button>
            </div>

            <div class="control">
                <a class="button" href="<?= site_url('/admin/users') ?>">Cancelar</a>
            </div>
        </div>

    </form>
</div>

<?= $this->endSection() ?>