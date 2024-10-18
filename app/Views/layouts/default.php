<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/1.0.2/css/bulma.min.css" integrity="sha512-RpeJZX3aH5oZN3U3JhE7Sd+HG8XQsqmP3clIbu4G28p668yNsRNj3zMASKe1ATjl/W80wuEtCx2dFA8xaebG5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="<?= site_url('/css/auto-complete.css') ?>">
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
</head>
<body>

<section class="section"> 

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-menu">
            <div class="navbar-start"> 
                <a class="navbar-item" href="<?= site_url("/") ?>">Inicio</a>
            </div>
                        <div class="navbar-end">
                <?php if (current_user()): ?>
                    <div class="navbar-item">¡Hola <?= esc(current_user()->name) ?>!</div>
                
                    <a class="navbar-item" href="<?= site_url("/profile/show") ?>">Perfil</a>
                
                    <?php if (current_user()->is_admin): ?>
                            <a class="navbar-item" href="<?= site_url("/admin/users") ?>">Usuarios</a>
                    <?php endif; ?>
                    
                    <a class="navbar-item" href="<?= site_url("/task") ?>">Tareas</a>
                    
                    <a class="navbar-item" href="<?= site_url("/logout") ?>">Cerrar sesión</a>
                    
                <?php else: ?>
                
                    <a class="navbar-item" href="<?= site_url("/signup") ?>">Registrate</a>
                
                    <a class="navbar-item" href="<?= site_url("/login") ?>">Inicia sesión</a>
                
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <?php if(session()->has('warning')): ?>
        <div class="notification is-warning is-light">
            <button class="delete"></button>
            <?= session('warning') ?>
        </div>
    <?php endif ?>

    <?php if(session()->has('info')): ?>
        <div class="notification is-info is-light">
            <button class="delete"></button>
            <?= session('info') ?>
        </div>
    <?php endif ?>

    <?php if(session()->has('error')): ?>
        <div class="notification is-danger is-light">
        <button class="delete"></button>
            <?= session('error') ?>
        </div>
    <?php endif ?>

    <?= $this->renderSection('content')?>
</section>

<script src="<?= site_url('/js/app.js') ?>"></script>
</body>
</html>