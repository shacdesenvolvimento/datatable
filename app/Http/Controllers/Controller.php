<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\datatables;


class Controller extends BaseController
{
    public function index(){
        $data= datatables::all();
        return view('datatable', compact('data'));
    }
    use AuthorizesRequests, ValidatesRequests;
}
