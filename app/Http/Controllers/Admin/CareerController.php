<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function api(Request $request)
    {
        $statuses = Career::query()->where('title' , 'LIKE' , '%'.$request->title.'%')->take(5)->get();
        return response()->json($statuses);
    }
}
