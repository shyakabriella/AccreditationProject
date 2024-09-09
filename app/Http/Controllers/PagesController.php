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
        $user = User::with('trainee')->findOrFail($id); // Eager load the trainee relationship
        $trainee = $user->trainee;

        if (!$trainee) {
            // Optionally, handle the case where no trainee profile exists
            return redirect()->back()->with('error', 'Trainee profile not found for this user.');
        }

        $applications = $trainee->programApplicants;

        return view('frontend.profile.index', compact('user', 'trainee', 'applications'));
    }

    public function editTraineeProfile($id)
    {
        $user = User::findOrFail($id);
        $trainee = $user->trainee;

        if (!$trainee) {
            return redirect()->route('getTraineeProfile', $id)->with('error', 'Trainee profile not found.');
        }

        return view('frontend.profile.edit', compact('user', 'trainee'));
    }

    public function updateTraineeProfile(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $trainee = $user->trainee;

        // Update user details
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // If no trainee profile exists, create one
        if (!$trainee) {
            $trainee = Trainee::create([
                'user_id' => $user->id,
                'date_of_birth' => $request->date_of_birth,
                'address' => $request->address,
                'phone' => $request->phone,
                'education_level' => $request->education_level,
            ]);
        } else {
            // Update trainee details
            $trainee->update([
                'date_of_birth' => $request->date_of_birth,
                'address' => $request->address,
                'phone' => $request->phone,
                'education_level' => $request->education_level,
            ]);
        }

        return redirect()->route('getTraineeProfile', $id)->with('success', 'Profile updated successfully.');
    }
}
