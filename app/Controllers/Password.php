<?php

namespace App\Controllers;

class Password extends BaseController
{
    public function forgot()
    {
        return view ('Password/forgot');
    }

    public function processForgot()
    {
        $model = new \App\Models\UserModel;

        $user = $model->findByEmail($this->request->getPost('email'));

        if ($user && $user->is_active) {

            $user ->startPasswordReset();

            $model->save($user);
            
            dd($user);

        } else {

            return redirect()->back()
                            ->with('warning', 'No se encontró ningún usuario activo con esa dirección de correo electrónico')
                            ->withInput();

        } 
    }
}