<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;


class FormController extends Controller{
    public function create(): View
    {
        return view('form.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha:ascii',
            'email' => 'required|email:rfc,dns',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()],
            'date_of_birth',
            'gender',
            'float' => 'required|numeric|between:2.5,99.99',
            'image' => 'required|max:2048|mimes:jpg,jpeg,png'
        ]);

        $request->image->storeAs('public/images', $request->image->getClientOriginalName());

        $results = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'float' => $request->float,
            'image' => $request->image->getClientOriginalName()
        ];


        return redirect()->route('/result')->with(['results' => $results, 'status' => 'Form Submitted!']);
    }
}
?>
