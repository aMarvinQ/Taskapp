<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Eliminar<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Eliminar foto de perfil</h1>

<p>¿Está seguro?</p>

<?= form_open("/profileimage/delete") ?>

    <button>Aceptar</button>
    <a href="<?= site_url('/profile/show') ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>