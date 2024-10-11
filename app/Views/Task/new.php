<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>New Task<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1>New Task</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<?= form_open('/task/create') ?>

    <?= $this->include('Task/form') ?>

    <button>Save</button>
    <a href="<?= site_url('/task/index') ?>">Cancel</a>

</form>

<?= $this->endSection() ?>