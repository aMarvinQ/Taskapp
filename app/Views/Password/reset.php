<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Restablecer contraseña<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Restablece tu contraseña</h1>

<?php if (session()->has('errors')) : ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif; ?>

<div class="container">
    <?= form_open("/password/processreset/$token") ?>
            
        <div class="field">
            <label class="label" for="password">Contraseña</label>
            <input class="input" type="password" name="password">
        </div>

        <div class="field">
            <label class="label" for="password_confirmation">Confirma la contraseña</label>
            <input class="input"type="password" name="password_confirmation">
        </div>
        
        <div class="field">
            <button class="button is-primary">Restablecer</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>