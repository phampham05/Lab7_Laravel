<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Nguyen Van A';
        $age = 20;
        $school = 'Đại học CNTT';

        return view('welcome', compact('name', 'age', 'school'));
    }

    public function multiplication($n)
    {
        if (!is_numeric($n)) {
            return view('multiplication', ['error' => 'Giá trị không hợp lệ!']);
        }

        return view('multiplication', compact('n'));
    }
}

