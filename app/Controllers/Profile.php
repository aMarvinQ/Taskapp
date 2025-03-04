<?php

namespace App\Controllers;

class Profile extends BaseController
{

    private $user;

    public function __construct()
    {
        $this->user = service('auth')->getCurrentUser();
    }

    public function show()
    {
        return view('Profile/show', [
            'user' =>$this->user
        ]);
    }

    public function edit()
    {

        $session = session();

        if ( ! $session->has('can_edit_profile_until')) {

            return redirect()->to("/profile/authenticate");

        }

        return view('Profile/edit', [
            'user' => $this->user
        ]);
    }

    public function update()
    {
        $this->user->fill($this->request->getPost());

        if ( ! $this->user->hasChanged()) {

            return redirect()->back()
                            ->with('warning', 'Nada que actualizar')
                            ->withInput();
        }

        $model = new \App\Models\UserModel;

        if ($model->save($this->user)) {

            session()->remove('can_edit_profile_until');

            return redirect()->to("/profile/show")
                            ->with('info', 'Datos actualizados exitosamente');
        } else {

            return redirect()->back()
                            ->with('errors', $model->errors())
                            ->with('warning', 'Datos invalidos')
                            ->withInput();
        }
    }

    public function editPassword()
    {
        return view('Profile/edit_password');
    }

    public function updatePassword()
    {
        if ( ! $this->user->verifyPassword($this->request->getPost('current_password'))) {
            return redirect()->back()
                            ->with('warning', 'Contraseña actual incorrecta');
        }

        $this->user->fill($this->request->getPost());

        $model = new \App\Models\UserModel;
        
        if ($model->save($this->user)) {
            
            return redirect()->to("/profile/show")
                            ->with('info', 'Contraseña actualizada exitosamente');
        } else {
            return redirect()->back()
                            ->with('errors', $model->errors())
                            ->with('warning', 'Datos invalidos');
        }
    }

    public function authenticate()
    {
        return view('Profile/authenticate');
    }

    public function processAuthenticate()
    {
        if ($this->user->verifyPassword($this->request->getPost('password'))) {

            session()->set('can_edit_profile_until', time() + 300);

            return redirect()->to("/profile/edit");
        } else {

            return redirect()->back()
                            ->with('warning', 'Contraseña incorrecta');
        }
    }
    public function image()
    {
        if ($this->user->profile_image) {
            
            $path = WRITEPATH . 'uploads/profile_images/' . $this->user->profile_image;
        
            $finfo = new \finfo(FILEINFO_MIME);
            
            $type = $finfo->file($path);
            
            header("Content-Type: $type");
            header("Content-Length: " . filesize($path));
            
            readfile($path);
            exit;
        }
    }
}