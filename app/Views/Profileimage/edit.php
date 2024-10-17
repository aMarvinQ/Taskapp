<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edición de foto de perfil<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1>Editar foto de perfil</h1>

<?= form_open_multipart("/profileimage/update") ?>

    <div>
        <label for="image">Archivo</label>
        <input type="file" name="image" id="image" />
    </div>

    <button>Subir</button>
    <a href="<?= site_url("/profile/show") ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>