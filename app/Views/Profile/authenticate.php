<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Editar Perfil <?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Editar perfil</h1>

<p>Por favor a continuación ingresa tu contraseña</p>

<?= form_open("/profile/processauthenticate") ?>

    <div>
        <label for="password">Contraseña</label>
        <input type="password" name="password">
    </div>

    <button>Confirmar</button>
    <a href="<?= site_url("/profile/show") ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>