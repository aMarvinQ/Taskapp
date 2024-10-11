<?php

namespace App\Controllers;

use App\Entities\TaskE;

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
        $task = new TaskE;

        return view('Task/new', [
            'task' => $task
        ]);
    }

    public function postCreate()
    {
        $model = new \App\Models\TaskModel;

        $task = new TaskE($this->request->getPost());

        if ($model->insert($task))
        {

            return redirect()->to("/task/show/{$model->insertID}")
            ->with('info', 'Task created successfully');

        } else {

            return redirect()->back()
                            ->with('errors', $model->errors())
                            ->with('warning', 'Invalid data')
                            ->withInput();

        }
    } 

    public function getEdit($id)
    {
        $model = new \App\Models\TaskModel;

        $task = $model->find($id);

        return view('Task/edit', [
            'task' => $task
        ]);
    }

    public function postUpdate($id)
    {
        $model = new \App\Models\TaskModel;

        $result = $model->update($id, [
            'description' => $this->request->getPost('description')
        ]);

        if ($result)
        {

            return redirect()->to("/task/show/$id")
                            ->with('info', 'Task updated succesfully');
        }
        else
        {
            return redirect()->back()
                            ->with('errors', $model->errors())
                            ->with('warning', 'Invalid data')
                            ->withInput();
        }
    }
}