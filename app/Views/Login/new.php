<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Inicio de sesión<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1>Inicio de sesión</h1>

    <?= form_open("/Login/create") ?>

        <div>
            <label for="email">Correo Electrónico</label>
            <input type="text" name="email" id="email" value="<?= old('email') ?>">
        </div>

        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password">
        </div>

        <button>Iniciar sesión</button>

        <a href="<?= site_url("/password/forgot") ?>">¿Olvidaste tu contraseña?</a>

    </form>

<?= $this->endSection() ?>