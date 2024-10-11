<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Task<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1>This is Task</h1>
    
    <a href="<?= site_url('/task/index') ?>">&laquo; back to index</a>
    <dl>
        <dt>ID</dt>
        <dd><?= $task->id ?></dd>
    
        <dt>Description</dt>
        <dd><?= esc($task->description) ?></dd>

        <dt>Created At</dt>
        <dd><?= $task->created_at ?></dd>

        <dt>Updated At</dt>
        <dd><?= $task->updated_at ?></dd>
    </dl>

<a href="<?= site_url('/task/edit/' . $task->id) ?>">Edit</a>
<a href="<?= site_url('/task/delete/' . $task->id) ?>">Delete</a>

<?= $this->endSection() ?>