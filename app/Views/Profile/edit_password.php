<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edición<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1 class="title">Editar contraseña</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<div class="container">
    <?= form_open('/profile/updatepassword') ?>

        <div class="field">
            <label class="label" for="current_password">Contraseña actual</label>

            <div class="control">
                <input class="input" type="password" name="current_password">
            </div>
        </div>

        <div class="field">
            <label class="label" for="password">Nueva contraseña</label>

            <div class="control">
                <input class="input" type="password" name="password">
            </div>
        </div>

        <div class="field">
            <label class="label" for="password_confirmation">Confirma tu nueva contraseña</label>
            
            <div class="control">
                <input class="input" type="password" name="password_confirmation">
            </div>
        </div>
        
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary">Guardar</button>
            </div>

            <div class="control">
                <a class="button" href="<?= site_url('/profile/show') ?>">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>