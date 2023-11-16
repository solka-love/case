<?php namespace Solkalove\Maket\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\DB;
use SolkaLove\Maket\Models\Subtasks;
use SolkaLove\Maket\Models\Department;
use SolkaLove\Maket\Models\Employee;
use SolkaLove\Maket\Models\Meetings;

class Maket extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Maket Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        // dd(DB::getQueryLog());
        $this->page['item'] = Employee::all();
        $this->page['departmentss'] = Department::with('subdivision')->get()->groupBy('subdivision.subdivision');
    }

    public function onProfile()
{
    \Log::info('onProfile method called');

    $employeeId = post('employee');
    \Log::info('Employee ID: ' . $employeeId);

    try {
        $profileData = Employee::with('task.subtasks')->find($employeeId);
        \Log::info('Profile data: ' . print_r($profileData->toArray(), true));
    } catch (\Exception $e) {
        \Log::error('Error retrieving profile data: ' . $e->getMessage());
        return response()->json(['error' => $e->getMessage()], 500);
    }

    $this->page['meetings'] = Meetings::all();

    $this->page['profileData'] = $profileData;

    return [
        '#profile-container' => $this->renderPartial('@profile')
    ];
}



}
