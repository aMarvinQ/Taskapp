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
        $task = new \App\Entities\TaskE;

        return view('Task/new', [
            'task' => $task
        ]);
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
                            ->with('warning', 'Invalid data')
                            ->withInput();

        } else {

            return redirect()->to("/task/show/$result")
                            ->with('info', 'Task created successfully');

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