<?php

namespace App\Http\Controllers;

use App\Models\Vitrine;

class VitrineController extends Controller
{
    public function show(Vitrine $vitrine): \Illuminate\View\View
    {
        return view('vitrines.lang', ['vitrine' => $vitrine]);
    }
}
