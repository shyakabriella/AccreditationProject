<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TrainingProgram;
use App\Http\Controllers\Controller;
use App\Models\TrainingProgramApplication;

class AdminController extends Controller
{
    public function trainingRequests()
    {
        $requests = TrainingProgramApplication::with('trainingProgram', 'user')->orderBy('created_at', 'desc')->get();

        return view('backend.getProgramApplications', compact('requests'));
    }

    // Approve Application
    public function approveApplication(Request $request, $applicationId)
    {
        $application = TrainingProgramApplication::findOrFail($applicationId);
        $application->status = 'approved';
        $application->reason = $request->reason;
        $application->save();

        return redirect()->back()->with('success', 'Application approved successfully.');
    }

    // Reject Application
    public function rejectApplication(Request $request, $applicationId)
    {
        $application = TrainingProgramApplication::findOrFail($applicationId);
        $application->status = 'rejected';
        $application->reason = $request->reason;
        $application->save();

        return redirect()->back()->with('success', 'Application rejected successfully.');
    }
}
