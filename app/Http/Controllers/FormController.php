<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function checkValidate(FormExampleRequest $request){
        echo 'ok';
        $success = "Dữ liệu được xác thực thành công";
        return view('home', compact('success'));
    }
}
