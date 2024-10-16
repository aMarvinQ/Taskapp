<div>
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
</div>

<div>
    <label for="email">Correo Electrónico</label>
    <input type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
</div>

<div>
    <label for="password">Contraseña</label>
    <input type="password" name="password">
    <?php if ($user->id): ?>
        <p>Dejalo en blanco para conservar la contraseña.</p>
    <?php endif; ?>
</div>

<div>
    <label for="password_confirmation">Confirma tu contraseña</label>
    <input type="password" name="password_confirmation">
</div>