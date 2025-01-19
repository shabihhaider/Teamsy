<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Department;

class DepartmentForm extends Component
{
    public $name;
    public $success = false;

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:3',
        ]);

        Department::create([
            'name' => $this->name
        ]);
        $this->success = true;

        $this->name = '';
    }

    public function mount($departmentId = null)
    {
        if($departmentId)
        {
            $this->name = Department::findOrFail($departmentId)->name;
        }
    }

    public function render()
    {
        return view('livewire.department-form');
    }
}
