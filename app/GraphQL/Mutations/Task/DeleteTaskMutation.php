<?php

namespace App\GraphQL\Mutations\Task;

use App\Models\Task;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class DeleteTaskMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteTask',
    ];

    public function type(): Type
    {
        return Type::nonNull(Type::boolean());
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $task = Task::find($args['id']);
        if ($task) {
            $task->delete();
            return true; // Retorne true se a tarefa foi deletada
        }

        return false; // Retorne false se a tarefa não foi encontrada
    }
}
