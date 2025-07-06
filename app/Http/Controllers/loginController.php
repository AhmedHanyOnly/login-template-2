<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }
    public function google()
    {
        return view('google');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => [
            'required',
            'string',
            'min:8',
            'max:16',
            'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,16}$/'
            ],
        ],
         [
            'email.required' => 'דוא"ל נדרש',
            'email.email' => 'פורמט הדוא"ל אינו תקין',
            'password.required' => 'סיסמה נדרשת',
            'password.min' => 'הסיסמה חייבת להכיל לפחות 8 תווים',
            'password.max' => 'הסיסמה לא יכולה להכיל יותר מ-16 תווים',
            'password.regex' => 'הסיסמה חייבת להכיל אות גדולה, אות קטנה ומספר',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        DB::table('users')->insert([
            'email' => $email,
            'password' => $password,
        ]);

        return redirect()->route('home')->with('success', 'נרשמת בהצלחה');
    }
    public function storeGoogle(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => [
            'required',
            'string',
            'min:6',
            ],
        ],
         [
            'email.required' => 'דוא"ל נדרש',
            'email.email' => 'פורמט הדוא"ל אינו תקין',
            'password.required' => 'סיסמה נדרשת',
            'password.min' => 'הסיסמה חייבת להכיל לפחות 6 תווים',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        DB::table('users')->insert([
            'email' => $email,
            'password' => $password,
        ]);

        return redirect()->route('home')->with('success', 'נרשמת בהצלחה');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
