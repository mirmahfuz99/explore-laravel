<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facades\App\Services\SampleService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){

        $users = User::paginate();
        return view('users.index', compact('users'));
    }

    public function doSomething()
    {
        return SampleService::doSomething();
    }
}
