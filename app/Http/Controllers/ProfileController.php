<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;
use App\Models\Education;
use Illuminate\View\View;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $data = [
            'user' => $request->user(),
            'title' => "Profile",
            'sub_title' => "User Profile",
            'header' => "Profile Edit"
        ];
        return view('admin.content.profile.edit', $data);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        if ($request->abater != '' && $request->cv != '') {
            $path = public_path('upload/abater/');
            $pathCv = public_path('upload/cv/');

            //code for remove old abater file
            if ($request->user()->abater != ''  && $request->user()->abater != null) {
                $file_old = $path . $request->user()->abater;
                unlink($file_old);
            }
            //code for remove old CV file
            if ($request->user()->cv != ''  && $request->user()->cv != null) {
                $file_old_cv = $pathCv . $request->user()->cv;
                unlink($file_old_cv);
            }

            //upload new Abater file
            $fileName = time() . "-abater." . $request->file('abater')->getClientOriginalExtension();
            $request->file('abater')->move(public_path('upload/abater/'), $fileName);

            //upload new CV file
            $fileNameCv = time() . "-cv." . $request->file('cv')->getClientOriginalExtension();
            $request->file('cv')->move(public_path('upload/cv/'), $fileNameCv);

            // for update in table
            $request->user()->fill(array_merge($request->validated(), ['abater' => $fileName, 'cv' => $fileNameCv]));
        } else if ($request->abater != '') {
            $path = public_path('upload/abater/');

            //code for remove old abater file
            if ($request->user()->abater != ''  && $request->user()->abater != null) {
                $file_old = $path . $request->user()->abater;
                unlink($file_old);
            }

            //upload new Abater file
            $fileName = time() . "-abater." . $request->file('abater')->getClientOriginalExtension();
            $request->file('abater')->move(public_path('upload/abater/'), $fileName);

            // for update in table
            $request->user()->fill(array_merge($request->validated(), ['abater' => $fileName]));
        } else if ($request->cv != '') {
            $pathCv = public_path('upload/cv/');

            //code for remove old CV file
            if ($request->user()->cv != ''  && $request->user()->cv != null) {
                $file_old_cv = $pathCv . $request->user()->cv;
                unlink($file_old_cv);
            }
            //upload new CV file
            $fileNameCv = time() . "-cv." . $request->file('cv')->getClientOriginalExtension();
            $request->file('cv')->move(public_path('upload/cv/'), $fileNameCv);

            // for update in table
            $request->user()->fill(array_merge($request->validated(), ['cv' => $fileNameCv]));
        } else {
            $request->user()->fill($request->validated());
        }

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        session()->put('success', 'User Info Updated successfully.');

        return Redirect::route('profile.view');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        dd($request->all());
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**
     * View the user's account.
     */
    public function view()
    {
        $data = [
            'title' => "Profile",
            'sub_title' => "User Profile",
            'educations' => Education::paginate(),
            'skills' => Skill::paginate(),
            'experiences' => Experience::paginate(),
            'projects' => Project::paginate(),
            'certificates' => Certificate::paginate(),
            'socialMedia' => SocialMedia::get()->first(),
        ];
        return view('admin.content.profile.profile', $data);
    }
}
