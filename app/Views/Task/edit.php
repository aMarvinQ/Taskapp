<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit Task<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1>Edit Task</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<?= form_open('/task/update/' . $task->id) ?>

    <?= $this->include('Task/form') ?>

    <button>Save</button>
    <a href="<?= site_url('/task/show/' . $task->id) ?>">Cancel</a>

</form>

<?= $this->endSection() ?>