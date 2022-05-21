<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudyField;
use Illuminate\Http\Request;

class StudyFieldController extends Controller
{
    public function api(Request $request)
    {
        $fields = StudyField::query()->where('title' , 'LIKE' , '%'.$request->title.'%')->take(5)->get();
        return response()->json($fields);
    }
}
