<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Tareas<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1>Tareas</h1>

    <a href="<?= site_url('/task/new') ?>">Nueva tarea</a>

    <?php if ($tasks): ?>
        <ul>
            <?php foreach($tasks as $task): ?>

                <li>
                    <a href="<?= site_url('/task/show/' . $task->id) ?>">
                    <?= esc($task->description) ?>
                    </a>
                </li>

            <?php endforeach; ?>
        </ul>

    <?= $pager->links() ?>
    <?php else: ?>

        <p>No se encuentran tareas.</p>

    <?php endif; ?>

<?= $this->endSection() ?>