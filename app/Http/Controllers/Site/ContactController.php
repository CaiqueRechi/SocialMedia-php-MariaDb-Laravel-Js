<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return view('contact', ['user' => User::findOrFail($id)]);
    }
}
