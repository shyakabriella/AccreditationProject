<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trainee;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }

    public function getTrades()
    {
        return view('frontend.trades.index');
    }

    public function getTradeDetails()
    {
        return view('frontend.trades.show');
    }

    public function getTraineeProfile($id)
    {
        $user = User::findOrFail($id); // Retrieve user by ID
        $trainee = $user->trainee; // Get the trainee relation
        $applications = $trainee ? $trainee->programApplicants : collect(); // Retrieve applications or an empty collection if no trainee

        return view('frontend.profile.index', compact('user', 'trainee', 'applications'));
    }

    public function editTraineeProfile($id)
    {
        $user = User::findOrFail($id); // Retrieve user by ID
        $trainee = $user->trainee;

        if (!$trainee) {
            return redirect()->route('getTraineeProfile', $id)->with('error', 'Trainee profile not found.');
        }

        return view('frontend.profile.edit', compact('user', 'trainee'));
    }

    public function updateTraineeProfile(Request $request)
    {
        $user = auth()->user();
        $trainee = $user->trainee;

        // Update user details
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // If no trainee profile exists, create a new one
        if (!$trainee) {
            $trainee = Trainee::create([
                'user_id' => $user->id,
                'date_of_birth' => $request->date_of_birth,
                'address' => $request->address,
                'phone' => $request->phone,
                'education_level' => $request->education_level,
            ]);
        } else {
            // If trainee exists, update the trainee details
            $trainee->update([
                'date_of_birth' => $request->date_of_birth,
                'address' => $request->address,
                'phone' => $request->phone,
                'education_level' => $request->education_level,
            ]);
        }

        return redirect()->route('getTraineeProfile')->with('success', 'Profile updated successfully.');
    }
}
