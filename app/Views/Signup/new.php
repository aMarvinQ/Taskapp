<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Registro<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1 class="title">Registrate</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<div class="container">

    <?= form_open('/signup/create') ?>
            
        <div class="field">
            <label class="label" for="name">Nombre</label>
            <div class="control">
                <input class="input" type="text" name="name" id="name" value="<?= old('name') ?>">
            </div>
        </div>
            
        <div class="field">
            <label class="label" for="email">Correo Electrónico</label>
            <div class="control">
                <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
        </div>
            
        <div class="field">
            <label class="label" for="password">Contraseña</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
        </div>
            
        <div class="field">
            <label class="label" for="password_confirmation">Confirma tu contraseña</label>
            <div class="control">
                <input class="input" type="password" name="password_confirmation">
            </div>
        </div>
            
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary">Registrarse</button>
            </div>

            <div class="control">
                <a class="button" href="<?= site_url("/") ?>">Cancelar</a>
            </div>

        </div>
            
    </form>

</div>

<?= $this->endSection() ?>