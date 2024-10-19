<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Olvide mi contraseña<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Recupera tu contraseña</h1>

<div class="container">
    <div class="field">
        <?= form_open("/password/processforgot") ?>
    </div>

    <div class="field">
        <label class="label"for="email">Correo electrónico</label>
        <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>
    
    <button class="button is-primary">Enviar</button>

    </form>
</div>

<?= $this->endSection() ?>