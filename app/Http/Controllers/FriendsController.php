<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendsController extends Controller
{
    public function index()
    {
        $friends = Auth::user()->getFriends();
        $requests = Auth::user()->getRequests();

        return view('templates.friends.index', compact('friends','requests'));
    }
}
