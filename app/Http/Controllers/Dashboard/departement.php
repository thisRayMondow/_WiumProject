<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\departement as ModelsDepartement;
use Illuminate\Http\Request;

class departement extends Controller
{
    public function index()
    {
        $dept = $this->_query_dept();
        return view('dashboard.departement.index', ['dept' => $dept]);
    }

    private function _query_dept()
    {
        return ModelsDepartement::all();
    }
}
