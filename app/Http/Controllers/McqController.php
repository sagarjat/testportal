<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
class McqController extends Controller
{
    public function index() {
        return \view('index');
    }

    public function login(Request $request) {

        $model = User::where(['email' => $request->email, 'password' => md5($request->password)])->get();

        if(!empty($model)) {
            return \redirect('admin_dashboard');
        } else {
            return redirect('/');
        }
    }
}
