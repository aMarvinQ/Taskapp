<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Registro<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1>Registrate</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<?= form_open('/signup/create') ?>

    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="<?= old('name') ?>">
    </div>

    <div>
        <label for="email">Correo Electrónico</label>
        <input type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>

    <div>
        <label for="password">Contraseña</label>
        <input type="password" name="password">
    </div>

    <div>
        <label for="password_confirmation">Confirma tu contraseña</label>
        <input type="password" name="password_confirmation">
    </div>

    <button>Registrarse</button>
    <a href="<?= site_url("/") ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>