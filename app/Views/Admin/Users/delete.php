<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Eliminar<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Eliminar usuario</h1>

<p>¿Está seguro?</p>

<?= form_open("/admin/users/delete/" . $user->id) ?>

    <button>Aceptar</button>
    <a href="<?= site_url('/admin/users/show/' . $user->id) ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>