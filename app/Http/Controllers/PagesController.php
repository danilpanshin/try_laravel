<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $skills = [
            'PHP',
            'Ruby',
            'Rails',
            'Bitrix'
        ];

        return view('welcome')->withSkills($skills)->withFoo('Danil');
    }

    public function contacts() {
        return view('contacts');
    }

    public function about() {
        return view('about');
    }
}
