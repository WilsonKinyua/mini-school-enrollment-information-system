<?php

namespace App\Http\Controllers\Admin;

use App\Models\AllParent;
use App\Models\AllStudent;
use App\Models\Role;
use App\Models\User;

class HomeController
{
    public function index()
    {
        $students = AllStudent::all()->count();
        $parents = AllParent::all()->count();
        $users = User::all()->count();
        $roles = Role::all()->count();
        $new_users = User::limit(20)->get();
        $new_students = AllStudent::limit(20)->get();
        $new_parents = AllParent::limit(20)->get();
        return view('home',compact('students','parents','users','roles','new_users','new_students','new_parents'));
    }
}
