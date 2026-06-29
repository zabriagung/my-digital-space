<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Project;

class ProfileController extends Controller
{
    // BERANDA
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();

        return view('welcome', [
            'namaLengkap' => 'Agung Pratama',
            'pengunjung' => 'Teknik Informatika',
            'skills' => [
                'HTML',
                'CSS',
                'JavaScript',
                'PHP',
                'Laravel'
            ],
            'projects' => $projects
        ]);
    }

    // PROFILE (Breeze)
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function update(Request $request)
    {
        $request->user()->fill(
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
            ])
        );

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')
            ->with('status', 'profile-updated');
    }

    public function destroy(Request $request)
    {
        $request->validate([
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