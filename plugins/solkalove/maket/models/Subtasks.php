<?php namespace SolkaLove\Maket\Models;

use Model;

/**
 * Model
 */
class Subtasks extends Model
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
    public $table = 'solkalove_maket_subtasks';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo =[
        'task' => 'solkalove\maket\models\task'
    ];
}
