<?php

return [
    'email' => [
            'is_unique' => 'Email address is taken. Enter a new one'
        ],
    'password_confirmation' => [
        'required' => 'Please confirm your password',
        'matches' => 'Password does not match'
    ]
];