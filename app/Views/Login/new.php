<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Inicio de sesión<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title">Inicio de sesión</h1>

    <div class="container">

        <?= form_open("/Login/create") ?>
    
            <div class="field">
                <label class="label" for="email">Correo Electrónico</label>

                <div class="control">
                    <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
                </div>
            </div>
    
            <div class="field">
                <label class="label" for="password">Contraseña</label>

                <div class="control">
                    <input class="input" type="password" name="password">
                </div>  
            </div>
    
            <div class="field">
                <label class="checkbox" for="remember_me">
                    <input type="checkbox" id="remember_me" name="remember_me"
                        <?php if (old('remember_me')): ?>checked<?php endif; ?>> Recuerdame
                </label>
            </div>

            <div class="field is-grouped">
                <div class="control"> 
                    <button class="button is-primary">Iniciar sesión</button>
                </div>
                <div class="control">
                    <a href="<?= site_url("/password/forgot") ?>">¿Olvidaste tu contraseña?</a>
                </div>
            </div>       
        </form>
    </div>

<?= $this->endSection() ?>