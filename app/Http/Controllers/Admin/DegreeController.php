<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Degree;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    public function api(Request $request)
    {
        $degrees = Degree::query()->where('title' , 'LIKE' , '%'.$request->title.'%')->take(5)->get();
        return response()->json($degrees);
    }
}
