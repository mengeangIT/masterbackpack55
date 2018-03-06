<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    function changeLang(Request $request)
    {

        session(['lan' => $request->lan]);

        return redirect()->back();
    }
}
