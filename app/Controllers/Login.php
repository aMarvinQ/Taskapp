<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function new()
    {
        return view('Login/new');
    }

    public function create()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $auth = service('auth');

        if($auth->login($email, $password)) {

            return redirect()->to("/")
                                ->with('info', 'Sesión iniciada');

        } else {

            return redirect()->back()
                            ->with('warning', 'Error al iniciar sesión')
                            ->withInput();

        }

    }

    public function delete()
    {

        service('auth')->logout();

        return redirect()->to('/login/showLogoutMessage');
    }

    public function showLogoutMessage()
    {
        return redirect()->to('/')
                        ->with('info', 'Has cerrado sesión');
    }
}