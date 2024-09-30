<?php


namespace App\GraphQL\Mutations\Task;

use App\Models\Task;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateTaskMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createTask',
        'description' => 'Creates a task'
    ];

    public function type(): Type
    {
        return GraphQL::type('Task');
    }

    public function args(): array
    {
        return [
            'title' => [
                'name' => 'title',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'description' => [
                'name' => 'description',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $task = new Task();
        $task->fill($args);
        $task->save();

        return $task;
    }
}
