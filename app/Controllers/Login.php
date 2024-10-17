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
        $remember_me = (bool )$this->request->getPost('remember_me');

        $auth = service('auth');

        if($auth->login($email, $password, $remember_me)) {

            $redirect_url = session('redirect_url') ?? '/';

            unset($_SESSION['redirect_url']);

            return redirect()->to($redirect_url)
                                ->with('info', 'Sesión iniciada')
                                ->withCookies();

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