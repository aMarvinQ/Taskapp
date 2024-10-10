<?php

namespace App\Controllers;

class Task extends BaseController
{
    public function getIndex()
    {
        $model = new \App\Models\TaskModel;
        $data = $model->findAll();

        return view('Task/index', ['tasks' => $data]);
    }

    public function getShow($id)
    {
        $model = new \App\Models\TaskModel;

        $task = $model->find($id);

        return view('Task/show', [
            'task' => $task
        ]);
    }

    public function getNew()
    {
        return view('Task/new');
    }

    public function postCreate()
    {
        $model = new \App\Models\TaskModel;

        $result = $model->insert([
            'description' => $this->request->getPost('description')
        ]);

        if($result === false){

            return redirect()->back()
                            ->with('errors', $model->errors())
                            ->with('warning', 'Invalid data');

        } else {

            return redirect()->to("/task/show/$result")
                            ->with('info', 'Task created successfully');

        }
    } 
}