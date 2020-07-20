<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('id', $request->id)->get();

        if($user->count() < 1) return abort(404);

        return view('templates.pages.users.user_profil_index', compact('user'));
    }
}
