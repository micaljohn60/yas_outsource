<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile.profile');
    }

    public function saveChanges(Request $request)
    {
        if($request->has('anonymous') && in_array($request->get('anonymous'), ['on', 'off']))
        {
            $this->authUserUpdate(['anonymous' => $request->get('anonymous')]);
        }

        return redirect()->back()->with(['message' => 'Save Changed']);
    }

    protected function authUserUpdate(array $attribute): bool
    {
        return auth()->user()->update($attribute);
    }
}
