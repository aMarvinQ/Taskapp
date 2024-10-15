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

    public function index()
    {

        $data = $this->model->findAll();

        return view('Task/index', ['tasks' => $data]);
    }

    public function show($id)
    {

        $task = $this->getTaskOr404($id);

        return view('Task/show', [
            'task' => $task
        ]);
    }

    public function new()
    {
        $task = new TaskE;

        return view('Task/new', [
            'task' => $task
        ]);
    }

    public function create()
    {

        $task = new TaskE($this->request->getPost());

        if ($this->model->insert($task))
        {

            return redirect()->to("/task/show/{$this->model->insertID}")
            ->with('info', 'Tarea creada satisfactoriamente.');

        } else {

            return redirect()->back()
                            ->with('errors', $this->model->errors())
                            ->with('warning', 'Datos invalidos.')
                            ->withInput();

        }
    } 

    public function edit($id)
    {

        $task = $this->getTaskOr404($id);

        return view('Task/edit', [
            'task' => $task
        ]);
    }

    public function update($id)
    {

        $task = $this->getTaskOr404($id);

        $task->fill($this->request->getPost());

        if( ! $task->hasChanged())
        {

            return redirect()->back()
                            ->with('warning', 'Nada que actulizar.')
                            ->withInput();
        }

        if ($this->model->save($task))
        {

            return redirect()->to("/task/show/$id")
                            ->with('info', 'Tarea actualizada satisfactoriamente.');
        }
        else
        {
            return redirect()->back()
                            ->with('errors', $this->model->errors())
                            ->with('warning', 'Datos invalidos')
                            ->withInput();
        }
    }

    public function delete($id)
    {
        $task = $this->getTaskOr404($id);

        if ($this->request->getMethod() === 'POST')
        {

            $this->model->delete($id);

            return redirect()->to('/task/index')
                            ->with('info', 'Tarea eliminada');

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