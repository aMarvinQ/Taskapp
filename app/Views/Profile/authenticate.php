<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Editar Perfil <?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Editar perfil</h1>

<div class="container">
    <p class="content">Por favor a continuación ingresa tu contraseña</p>

    <?= form_open("/profile/processauthenticate") ?>

        <div class="field">
            <label class="label" for="password">Contraseña</label>

            <div class="control">
                <input class="input" type="password" name="password">
            </div>
        </div>
        
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary">Confirmar</button>
            </div>

            <div class="control">
                <a class="button" href="<?= site_url("/profile/show") ?>">Cancelar</a>
            </div>
        </div>

    </form>
</div>

<?= $this->endSection() ?>