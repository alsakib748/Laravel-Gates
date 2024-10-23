<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{

    public function dashboard(){

        // todo: One way to execute gate on controller

        // if(Gate::allows('isAdmin')){
        //     return view('dashboard');
        // }else{
        //     return 'Access Denied';
        // }

        // todo: Second Way to execute gate on controller
        // Gate::authorize('isAdmin');

        return view('dashboard');



    }

    public function profileData($id){

        // todo: One way to execute gate on controller
        // Gate::authorize('view-profile',$id);

        // $user = User::where('id',$id)->first();

        //     return view('profile_page',compact('user'));

        // todo: Second way to execute gate on controller
        // if(Gate::allows('view-profile',$id)){
        //     $user = User::where('id',$id)->first();

        //     return view('profile_page',compact('user'));
        // }else{
        //     // return redirect()->route('dashboard');
        //     abort(403);
        // }

        // todo: Third way to execute gate on controller (OR(||) Any gete true then work)

        // if(Gate::any(['view-profile','update-post'],
        if(Gate::any(['view-profile'],
        $id)){
            $user = User::where('id',$id)->first();

            return view('profile_page',compact('user'));
        }else{
            // return redirect()->route('dashboard');
            abort(403);
        }

        // todo: Third way to execute gate on controller (both gate false then work))

        // if(Gate::any(['view-profile','update-post'],
        // if(Gate::none(['view-profile','isAdmin'],
        // $id)){
        //     $user = User::where('id',$id)->first();

        //     return view('profile_page',compact('user'));
        // }else{
        //     // return redirect()->route('dashboard');
        //     abort(403);
        // }

        // $user = User::findOrFail($id)->first();

    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
