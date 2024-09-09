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

    public function getTrainingPrograms()
    {
        return view('backend.trainingPrograms.index');
    }
}
