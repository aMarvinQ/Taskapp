<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>New Task<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1>New Task</h1>

<?= form_open('/task/create') ?>

    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="">
    </div>

    <button>Save</button>
    <a href="<?= site_url('/task/index') ?>">Cancel</a>

</form>

<?= $this->endSection() ?>