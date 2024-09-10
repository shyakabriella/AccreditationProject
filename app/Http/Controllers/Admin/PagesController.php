<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Institution;
use Illuminate\Http\Request;
use App\Models\TrainingProgram;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function getTrainingPrograms()
    {
        $trainingPrograms = TrainingProgram::orderBy('id', 'desc')->get();

        return view('backend.trainingPrograms.index', compact('trainingPrograms'));
    }

    public function createTrainingProgram()
    {
        return view('backend.trainingPrograms.create');
    }

    public function storeTrainingProgram(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'source_of_competency' => 'nullable|string|max:255',
            'module_duration' => 'nullable|integer|min:0',
            'number_of_trainees' => 'nullable|integer|min:0',
            'training_duration' => 'nullable|integer|min:0',
            'entry_requirements' => 'nullable|string|max:255',
        ]);

        try {
            // Create the training program and automatically assign the institution ID from the logged-in user
            TrainingProgram::create([
                'institution_id' => Auth::user()->institution->id,  // Assuming the user has an institution relationship
                'name' => $validatedData['name'],
                'source_of_competency' => $validatedData['source_of_competency'],
                'module_duration' => $validatedData['module_duration'],
                'number_of_trainees' => $validatedData['number_of_trainees'],
                'training_duration' => $validatedData['training_duration'],
                'entry_requirements' => $validatedData['entry_requirements'],
            ]);

            // Redirect back with success message
            return redirect()->route('getTrainingPrograms')->with('success', 'Training program created successfully.');
        } catch (\Exception $e) {
            // Log the error and redirect back with an error message
            Log::error('Error creating training program: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'There was an issue creating the training program. Please try again later.']);
        }
    }

    public function editTrainingProgram($id)
    {
        $trainingProgram = TrainingProgram::findOrFail($id);

        $this->authorize('update', $trainingProgram);

        return view('backend.trainingPrograms.edit', compact('trainingProgram'));
    }

    public function getProfile($id)
    {
        $user = User::with('institution')->findOrFail($id);
        $institution = $user->institution ?? new Institution();

        return view('backend.profile', compact('user', 'institution'));
    }

    // Update institution profile
    public function updateInstitutionProfile(Request $request, $id)
    {
        // Find the user and their associated institution profile
        $user = User::findOrFail($id);
        $institution = $user->institution;

        // Update user details
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // If no institution profile exists, create one
        if (!$institution) {
            $institution = Institution::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'type' => $request->type,
                'physical_address' => $request->physical_address,
                'province' => $request->province,
                'district' => $request->district,
                'sector' => $request->sector,
                'cell' => $request->cell,
                'village' => $request->village,
                'phone' => $request->phone,
                'email' => $request->email,
                'owner_name' => $request->owner_name,
                'owner_phone' => $request->owner_phone,
                'owner_email' => $request->owner_email,
                'contact_person_name' => $request->contact_person_name,
                'contact_person_phone' => $request->contact_person_phone,
                'contact_person_email' => $request->contact_person_email,
                'registration_date' => $request->registration_date,
                'registration_number' => $request->registration_number,
            ]);
        } else {
            // Update institution details
            $institution->update([
                'name' => $request->name,
                'type' => $request->type,
                'physical_address' => $request->physical_address,
                'province' => $request->province,
                'district' => $request->district,
                'sector' => $request->sector,
                'cell' => $request->cell,
                'village' => $request->village,
                'phone' => $request->phone,
                'email' => $request->email,
                'owner_name' => $request->owner_name,
                'owner_phone' => $request->owner_phone,
                'owner_email' => $request->owner_email,
                'contact_person_name' => $request->contact_person_name,
                'contact_person_phone' => $request->contact_person_phone,
                'contact_person_email' => $request->contact_person_email,
                'registration_date' => $request->registration_date,
                'registration_number' => $request->registration_number,
            ]);
        }

        // Redirect with a success message
        return redirect()->route('dashboard', $id)->with('success', 'Institution profile updated successfully.');
    }
}
