<?php

namespace App\Http\Controllers;

use App\Models\Education_level;
use Illuminate\Http\Request;

class EducationLevelController extends Controller
{
    //
    public function index()
    {
        //
        $data = [
            'title'     => "Education Type",
            'class'     => 'Education',
            'sub_class' => 'type',
            'navbar'    => 'education',
            'education_type'=> Education_level::all(),
        ];
        return view('landing.education.type', $data);
    }
}
