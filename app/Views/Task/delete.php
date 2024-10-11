<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete Task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Delete Task</h1>

<p>Are you sure?</p>

<?= form_open("/task/delete/" . $task->id) ?>

    <button>Yes</button>
    <a href="<?= site_url('/task/show/' . $task->id) ?>">Cancel</a>

</form>

<?= $this->endSection() ?>