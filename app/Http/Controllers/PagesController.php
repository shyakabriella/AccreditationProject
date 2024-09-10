<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trainee;
use App\Models\TrainingProgram;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $trainingPrograms = TrainingProgram::orderBy('id', 'desc')->get();

        return view('frontend.index', compact('trainingPrograms'));
    }

    public function getTrades()
    {
        $trainingPrograms = TrainingProgram::orderBy('id', 'desc')->get();

        return view('frontend.trades.index', compact('trainingPrograms'));
    }

    public function getTradeDetails($id)
    {
        $program = TrainingProgram::findOrFail($id);

        return view('frontend.trades.show', compact('program'));
    }

    public function getTraineeProfile($id)
    {
        $user = User::with('trainee')->findOrFail($id);

        $trainee = $user->trainee ?? new Trainee();

        $applications = $trainee->exists ? $trainee->programApplicants : collect();

        return view('frontend.profile.index', compact('user', 'trainee', 'applications'));
    }

    public function editTraineeProfile($id)
    {
        $user = User::with('trainee')->findOrFail($id);

        $trainee = $user->trainee ?? new Trainee();

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
