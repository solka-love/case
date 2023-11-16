<?php namespace SolkaLove\Maket\Models;

use Model;

/**
 * Model
 */
class Task extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'solkalove_maket_task';

    public $belongsToMany = [
        'employee' => [
            \SolkaLove\Maket\Models\Employee::class,
            'table' => 'solkalove_maket_employee_task',
        ],
    ];

    public $belongsTo = [
        'depend'  => 'solkalove\maket\models\employee',
        'status' => 'solkalove\maket\models\Status',
        // 'subtasks' => 'solkalove\maket\models\Subtasks'
    ];


    public $hasMany = [
        'subtasks' => 'solkalove\maket\models\Subtasks'
    ];


    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
