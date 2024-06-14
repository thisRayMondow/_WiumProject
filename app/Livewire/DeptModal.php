<?php

namespace App\Livewire;

use App\Models\departement;
use Livewire\Component;

class DeptModal extends Component
{
    public $dept;
    public function mount($dept = null)
    {
        $this->dept = $dept ?? $this->_query_departement();
    }

    private function _query_departement()
    {
        return departement::all();
    }

    public function render()
    {
        return view('livewire.dept-modal', ['dept' => $this->dept]);
        // dd($this->_query_departement());
    }
}
