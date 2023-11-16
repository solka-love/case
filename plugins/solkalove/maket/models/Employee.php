<?php namespace SolkaLove\Maket\Models;

use Model;

/**
 * Model
 */
class Employee extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'solkalove_maket_employee';


    public $belongsToMany = [
        'task' => [
            \SolkaLove\Maket\Models\Task::class,
            'table' => 'solkalove_maket_employee_task',
        ],
    ];

    public $belongsTo =[
        'department' => 'solkalove\maket\models\department'
    ];

    public $attachOne = [
        'photo' => \System\Models\File::class,
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
