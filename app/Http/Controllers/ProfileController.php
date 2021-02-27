<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile()
    {

  //$user = User::where('name', $name)->first();

    
      return view('profile.index', compact('user'));
    }
}
