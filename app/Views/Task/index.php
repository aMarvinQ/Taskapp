<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Task<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1>This is Task</h1>

    <a href="<?= site_url('/task/new') ?>">New task</a>

    <ul>
        <?php foreach($tasks as $task): ?>

            <li>
                <a href="<?= site_url('/task/show/' . $task['id']) ?>">
                <?= $task['description'] ?>
                </a>
            </li>

        <?php endforeach; ?>
    </ul>

<?= $this->endSection() ?>