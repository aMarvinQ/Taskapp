<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edición de foto de perfil<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1 class="title">Editar foto de perfil</h1>

<div class="container">
    <?= form_open_multipart("/profileimage/update") ?>
    
        <div class="file is-boxed">
            <label class="file-label">
                <input class="file-input" type="file" name="image" />
                <span class="file-cta">
                    <span class="file-icon">
                        <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label"> Elige un archivo… </span>
                </span>
            </label>
        </div>
    
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary">Subir</button>
            </div>

            <div class="control">
                <a class="button" href="<?= site_url("/profile/show") ?>">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>