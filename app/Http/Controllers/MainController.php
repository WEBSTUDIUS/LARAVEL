<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        // $users = Phonebook::all();
        $users = Phonebook::orderBy('name', 'ASC')->paginate(20);
        return view('home', compact('users'));
    }

    public function search(Request $request) {
        $s = $request->s;
        // dd($s);
        $users = Phonebook::where('name', 'LIKE', "%{$s}%")->orderBy('name', 'ASC')->paginate(10);
        return view('home', compact('users'));
    }
}
