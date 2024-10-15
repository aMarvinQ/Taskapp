<?php

namespace App\Models;

class TaskModel extends \CodeIgniter\Model
{
    protected $table = 'task';

    protected $allowedFields = ['description'];

    protected $returnType = 'App\Entities\TaskE';

    protected $useTimestamps = true;

    protected $validationRules = [
        'description' => 'required'
    ];

    protected $validationMessages = [
        'description' => [
            'required' => 'Please enter a description'
        ]
    ];

    public function getTaskByUserId($id)
    {
        return $this->where('user_id', $id)
                    ->findAll();
    }

    public function getTaskByUserId1($id, $user_id)
    {
        return $this->where('id', $id)
                    ->where('user_id', $user_id)
                    ->first();
    }
}