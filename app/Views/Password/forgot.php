<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Olvide mi contraseña<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Recupera tu contraseña</h1>

<?= form_open("/password/processforgot") ?>

    <div>
        <label for="email">Correo electrónico</label>
        <input type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>

    <button>Enviar</button>

</form>

<?= $this->endSection() ?>