<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function admins(){
        $admins = User::where('user_type', 'admin')->paginate(4);
        return view('dashbaord.users.admins',['admins'=>$admins]);
    }
    public function moderators(){
        $moderators = User::where('user_type', 'moderator')->paginate(4);
        return view('dashbaord.users.moderators',['moderators'=>$moderators]);
    }
    public function customers(){
        $customers = User::where('user_type', 'customer')->paginate(4);
        return view('dashbaord.users.customers',['customers'=>$customers]);
    }

}
