<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users from the database
        return response()->json($users);
    }
}
