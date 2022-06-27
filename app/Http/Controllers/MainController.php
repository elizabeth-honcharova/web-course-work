<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function portfolio() {
        return view('portfolio');
    }

    public function validate_form(Request $request) {

        $this->validate($request,
        [
            'name' => 'required|max:100',
            'email' => 'required|email:rfc,dns',
            'msg' => 'required|max:500',
        ]);

        return redirect('/')->with('success', 'Okay');
    }
}
