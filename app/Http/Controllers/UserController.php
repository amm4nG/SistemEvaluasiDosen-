<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('index', compact(['users']));
    }

    public function import(Request $request){
        Excel::import(new UsersImport, $request->file('file'));
        return back();
    }
}
