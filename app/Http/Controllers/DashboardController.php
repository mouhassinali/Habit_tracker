<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(Request $request){
        $user = $request->user();
        return view('user.index', compact('user'));
    }

    public function habits(Request $request){
        $user = User::findOrFail($request->user()->id);
        $habits = $user->habits;
        return view('user.habits', compact('user', 'habits'));
    }
}
