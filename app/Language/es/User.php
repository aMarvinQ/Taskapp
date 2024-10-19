<?php

return [
    'email' => [
            'is_unique' => 'Correo ya existente. Ingresa uno nuevo'
        ],
    'password_confirmation' => [
        'required' => 'Por favor confirma tu contraseña',
        'matches' => 'La contraseña no coincide'
    ]
];