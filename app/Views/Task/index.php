<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Tareas<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1>Tareas</h1>

    <a href="<?= site_url('/task/new') ?>">Nueva tarea</a>

    <ul>
        <?php foreach($tasks as $task): ?>

            <li>
                <a href="<?= site_url('/task/show/' . $task->id) ?>">
                <?= esc($task->description) ?>
                </a>
            </li>

        <?php endforeach; ?>
    </ul>

<?= $this->endSection() ?>