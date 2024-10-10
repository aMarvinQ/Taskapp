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

    public function getCreate()
    {
        $model = new \App\Models\TaskModel;

        $model->insert([
            'description' => $this->request->getPost('description')
        ]);

        dd($model->insertID);
    }
}