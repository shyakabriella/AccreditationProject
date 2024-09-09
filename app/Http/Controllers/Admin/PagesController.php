<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Institution;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function getProfile($id)
    {
        $user = User::with('institution')->findOrFail($id);
        $institution = $user->institution ?? new Institution();

        return view('backend.profile', compact('user', 'institution'));
    }
}
