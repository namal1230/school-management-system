<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function save()
    {
        // Logic for saving student data
    }
}
