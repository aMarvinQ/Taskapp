<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Restablecer contraseña<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Restablece tu contraseña</h1>

<?php if (session()->has('errors')) : ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif; ?>

<?= form_open("/password/processreset/$token") ?>
    
    <div>
        <label for="password">Contraseña</label>
        <input type="password" name="password">
    </div>

    <div>
        <label for="password_confirmation">Confirma la contraseña</label>
        <input type="password" name="password_confirmation">
    </div>

    <button>Restablecer</button>
</form>

<?= $this->endSection() ?>