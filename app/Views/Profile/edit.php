<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edición<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1>Editar perfil</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<?= form_open('/profile/update') ?>

    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
    </div>
            
    <div>
        <label for="email">Correo Electrónico</label>
        <input type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
    </div>
            
    <button>Guardar</button>
    <a href="<?= site_url('/profile/show') ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>