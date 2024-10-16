<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Usuarios<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1>Usuarios</h1>

    <a href="<?= site_url('/admin/users/new') ?>">Nuevo Usuario</a>

    <?php if ($users): ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Administrador</th>
                    <th>Creado el</th>
                </tr>
            </thead>
                <?php foreach($users as $user): ?>

                    <tr>
                        <td>
                            <a href="<?= site_url('/admin/users/show/' . $user->id) ?>">
                                <?= esc($user->name) ?>
                            </a>
                        </td>
                        <td><?= esc($user->email) ?></td>
                        <td><?= $user->is_admin ? 'Si' : 'No' ?></td>
                        <td><?= $user->created_at ?></td>
                    </tr>

                <?php endforeach; ?>
        </table>

    <?= $pager->links() ?>
    <?php else: ?>

        <p>No se encuentran usuarios.</p>

    <?php endif; ?>

<?= $this->endSection() ?>