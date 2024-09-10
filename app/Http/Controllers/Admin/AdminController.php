<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TrainingProgram;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function trainingRequests()
    {
        $requests = TrainingProgram::orderBy('id', 'desc');

        return view('backend.getProgramApplications', compact('requests'));
    }

    public function approveProgram(Request $request, $id)
    {
        $program = TrainingProgram::find($id);

        if (auth()->user()->role === 'admin') {
            $program->status = 'approved';
            $program->admin_comments = $request->input('admin_comments');
            $program->save();

            return redirect()->back()->with('success', 'Program approved.');
        }

        return redirect()->back()->with('error', 'Unauthorized action.');
    }

    public function rejectProgram(Request $request, $id)
    {
        $program = TrainingProgram::find($id);

        if (auth()->user()->role === 'admin') {
            $program->status = 'rejected';
            $program->admin_comments = $request->input('admin_comments');
            $program->save();

            return redirect()->back()->with('success', 'Program rejected.');
        }

        return redirect()->back()->with('error', 'Unauthorized action.');
    }
}
