<?php

namespace App\Controllers;

class Profileimage extends BaseController
{
    public function edit()
    {
        return view('Profileimage/edit');
    }

    public function update()
    {
        $file = $this->request->getFile('image');

        if ( ! $file->isValid()) {

            $error_code = $file->getError();
            
            if ($error_code == UPLOAD_ERR_NO_FILE) {
                return redirect()->back()
                                ->with('warning', 'No has seleccionado ningun archivo');
            }

            throw new \RuntimeException($file->getErrorString() . " " . $error_code);
            
        }

        $size = $file->getSizeByUnit('mb');

        if ($size > 4) {
            
            return redirect()->back()
                            ->with('warning', 'Archivo demasiado grande (max 2MB)');
        }

        $type = $file->getMimeType();

        if ( ! in_array($type, ['image/png', 'image/jpeg'])) {

            return redirect()->back()
                            ->with('warning', 'Formato de imagen invalido (Utilice PNG o JPEG)');
        }

        $path = $file->store('profile_images');

        $path = WRITEPATH . 'uploads/' . $path;

        service('image')
            ->withFile($path)
            ->fit(200, 200, 'center')
            ->save($path);

        dd($path);
    }
}