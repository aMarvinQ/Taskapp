<?php

namespace App\Controllers;

use App\Entities\TaskE;

class Task extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new \App\Models\TaskModel;
    }

    public function getIndex()
    {
        $data = $this->model->findAll();

        return view('Task/index', ['tasks' => $data]);
    }

    public function getShow($id)
    {

        $task = $this->getTaskOr404($id);

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

        $task = new TaskE($this->request->getPost());

        if ($this->model->insert($task))
        {

            return redirect()->to("/task/show/{$this->model->insertID}")
            ->with('info', 'Task created successfully');

        } else {

            return redirect()->back()
                            ->with('errors', $this->model->errors())
                            ->with('warning', 'Invalid data')
                            ->withInput();

        }
    } 

    public function getEdit($id)
    {

        $task = $this->getTaskOr404($id);

        return view('Task/edit', [
            'task' => $task
        ]);
    }

    public function postUpdate($id)
    {

        $task = $this->getTaskOr404($id);

        $task->fill($this->request->getPost());

        if( ! $task->hasChanged())
        {

            return redirect()->back()
                            ->with('warning', 'Nothing to update')
                            ->withInput();
        }

        if ($this->model->save($task))
        {

            return redirect()->to("/task/show/$id")
                            ->with('info', 'Task updated succesfully');
        }
        else
        {
            return redirect()->back()
                            ->with('errors', $this->model->errors())
                            ->with('warning', 'Invalid data')
                            ->withInput();
        }
    }

    public function postDelete($id)
    {
        $task = $this->getTaskOr404($id);

        if ($this->request->getMethod() === 'post')
        {

            $this->model->delete($id);

            return redirect()->to('/task/index')
                            ->with('info', 'TaskDeleted');

        }

        return view ('Task/delete', [
            'task' => $task
        ]);
    }

    public function getTaskOr404($id)
    {
        $task = $this->model->find($id);

        if ($task === null)
        {

            throw new \CodeIgniter\Exceptions\PageNotFoundException("Task with ID $id not found");

        }

        return $task;
    }
}