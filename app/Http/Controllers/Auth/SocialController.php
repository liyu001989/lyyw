<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function redirect($source)
    {
        session(['socialBackUrl'=>$this->session->previousUrl()]);
        return \Socialize::with($source)->redirect();
    }

    public function callback($source)
    {
        $user  = \Socialize::with($source)->user();
        if (!$user) return redirect(session('socialBackUrl') ?: '/');

        var_dump($user);
    }
}
