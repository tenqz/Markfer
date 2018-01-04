<?php

namespace App\Http\Controllers;

use App\Redirects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RedirectsController extends Controller
{
    public function adminpage()
    {
        if (Session::has('pass') && Session::get('pass') == 'mypass')
        {
            $links = Redirects::all();
            return view('cabinet', ['links' => $links]);
        }
        return view('login');
    }

    public function redirectpage($link)
    {
        $link = Redirects::where('screenname', $link)->first();
        if ($link) {
            $link->clicks++;
            $link->save();
            return redirect($link->link);
        }
        else {
            return "Sorry, this URL is not found";
        }
    }

    public function auth(Request $request)
    {
        Session::put('pass', $request->password);
        return redirect('/');
    }

    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/');
    }

}
