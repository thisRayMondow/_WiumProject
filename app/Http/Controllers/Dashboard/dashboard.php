<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DepartementController;
use App\Models\departement;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index(){
        $_dept = $this->_query_dept();
        return view('dashboard.index', ['dept'=> $_dept]);
        // dd($this->_query_dept());
    }

    private function _query_dept(){
        foreach (departement::all() as $key => $value) {
            $data[$value->id] = [
                'name' => $value->name,
                'kode_wilayah' => $value->kode_wilayah,
                'alamat' => $value->alamat,
            ];
        }
        return $data;
    }
}
