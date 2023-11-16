<?php namespace SolkaLove\Maket;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Solkalove\Maket\Components\Maket' => 'maket',
        ];
    }


    public function registerSettings()
    {
    }

    public function registerModels()
{
    return [
        'solkalove\maket\models\Task' => 'task',
        'solkalove\maket\models\Subtask' => 'subtask'
    ];
}
}
