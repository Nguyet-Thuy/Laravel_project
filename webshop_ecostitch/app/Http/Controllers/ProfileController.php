<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
    
        $user = $request->user();

        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        if ($request->hasFile('avatar')) {
            \Log::info('Avatar file detected');
    
            // Verwijder de oude avatar als deze bestaat
            if ($user->avatar && Storage::exists('public/' . $user->avatar)) {
                \Log::info('Deleting old avatar: ' . $user->avatar);
                Storage::delete('public/' . $user->avatar);
            }
    
            // Sla de nieuwe afbeelding op
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            \Log::info('Saving new avatar: ' . $avatarPath);
            $user->avatar = $avatarPath;
        }

        // Sla de wijzigingen op
        $user->save();

        // Redirect naar de profielpagina met een succesmelding
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
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
}
