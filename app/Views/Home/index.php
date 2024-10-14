<?= $this->extend('layouts/default')?>

<?= $this->section('title')?>Inicio<?= $this->endSection()?>

<?= $this->section('content')?>

    <h1>Bienvenido</h1>

    <a href="<?= site_url("/signup") ?>">Registrate</a>

<?= $this->endSection()?>
