<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
use App\Calculator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function Sum(Request $request) {
        $data = $request->validate([
            "numbers"    => ["required", "array"],
            "numbers.*"  => ["required", "int"]
        ])['numbers'];
            
        return response()->json(["total" => Calculator::Sum($data)]); 
    }
}
