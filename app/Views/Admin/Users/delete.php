<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Eliminar<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Eliminar usuario</h1>

<div class="container">
    <div class="field">
        <p>¿Está seguro?</p>
    </div>

    <?= form_open("/admin/users/delete/" . $user->id) ?>

        <div class="field is-grouped">
            <button class="button is-primary">Aceptar</button>
            <a class="button" href="<?= site_url('/admin/users/show/' . $user->id) ?>">Cancelar</a>
        </div>

    </form>
</div>

<?= $this->endSection() ?>