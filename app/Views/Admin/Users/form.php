<div class="container">
    <div class="field">
        <label class="label" for="name">Nombre</label>

        <div class="control">
            <input class="input" type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
        </div>
    </div>
    
    <div class="field">
        <label class="label" for="email">Correo Electrónico</label>

        <div class="control">
            <input class="input" type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
        </div>
    </div>
    
    <div class="field">
        <label class="label" for="password">Contraseña</label>

        <div class="control">
            <input class="input" type="password" name="password">
        </div>

        <?php if ($user->id): ?>
            <p class="help">Dejalo en blanco para conservar la contraseña.</p>
        <?php endif; ?>
    </div>
        
    <div class="field">
        <label class="label" for="password_confirmation">Confirma tu contraseña</label>

        <div class="control">
            <input class="input" type="password" name="password_confirmation">
        </div>
    </div>
        
    <div class="field">
        <label class="checkbox" for="is_active">
            <?php if ($user->id == current_user()->id): ?>
            
                <input type="checkbox" checked disabled> Activo
            
            <?php else: ?>
                <input type="hidden" name="is_active" value="0">
            
                <input type="checkbox" id="is_active" name="is_active" value="1"
                        <?php if (old('is_active', $user->is_active)): ?>checked<?php endif; ?>> Activo
                        
            <?php endif; ?>
        </label>
    </div>
                        
    <div class="field">
        <label class="checkbox" for="is_admin">
            <?php if ($user->id == current_user()->id): ?>
            
                <input type="checkbox" checked disabled> Administrador
            
            <?php else: ?>
                <input type="hidden" name="is_admin" value="0">
            
                <input type="checkbox" id="is_admin" name="is_admin" value="1"
                        <?php if (old('is_admin', $user->is_admin)): ?>checked<?php endif; ?>> Administrador
                        
            <?php endif; ?>
        </label>
    </div>
</div>